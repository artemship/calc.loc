$(function () {

    var users = [];
    var xhr = new XMLHttpRequest();
    xhr.responseType = 'json';
    xhr.open('GET', '/js/get/partners', true);
    xhr.onload = function () {
        users = xhr.response;
        // console.log(users);
        outputHtml(users, 1);
    };
    xhr.send(null);

    let sortOptions = [];

    const searchEdit = document.getElementById("js-search-users");
    searchEdit.addEventListener('input', () => filterUsers(1));

    function filterUsers(pageNumber) {
        $('#js-users-table').empty();
        $('#js-navigation').empty();
        let filterUsers = searchUsers(searchEdit.value);
        outputHtml(filterUsers, pageNumber, sortOptions);
    }

    function searchUsers(searchText) {
        let matches = users.filter(user => {
            const regex = new RegExp(`${searchText}`, 'gi');
            return user.partner_name.match(regex)
                + user.branch_name.match(regex)
                + user.city.match(regex)
                + user.address.match(regex);
        });
        console.log(matches);
        return matches;
    }

    function byField(field) {
        return sortOptions[0] === 'asc'
            ? (a, b) => a[field] > b[field] ? 1 : -1
            : (a, b) => a[field] > b[field] ? -1 : 1
    }

    function switchOrder() {
        return sortOptions[0] === 'asc' ? sortOptions[0] = 'desc' : sortOptions[0] = 'asc'
    }

    function sort(event) {
        let value = event.target.value;
        !!sortOptions && (sortOptions[1] === value) ? switchOrder() : sortOptions = ['asc', value];
        users.sort(byField(value));
        filterUsers(1, sortOptions);
    }

    $("#js-amount-per-page").change(function () {
        filterUsers(1, sortOptions);
    });

    function selectPage(event) {
        let pageNumber = event.target.value;
        filterUsers(pageNumber, sortOptions);
    }

    function outputHtml(users, pageNumber, sortOptions) {
        pageNumber = Number(pageNumber);
        let amountPerPage = Number(document.getElementById("js-amount-per-page").value);

        let row = document.createElement("div");
        row.className = 'cabinet_users_table-title';

        let userLogin = document.createElement("div");
        userLogin.className = 'cabinet_users_table-cell';
        userLogin.value = 'partner_name';
        userLogin.addEventListener('click', sort);
        let userName = document.createElement("div");
        userName.className = 'cabinet_users_table-cell';
        userName.value = 'branch_name';
        userName.addEventListener('click', sort);
        let userEmail = document.createElement("div");
        userEmail.className = 'cabinet_users_table-cell';
        userEmail.value = 'city';
        userEmail.addEventListener('click', sort);
        let userRole = document.createElement("div");
        userRole.className = 'cabinet_users_table-cell';
        userRole.value = 'address';
        userRole.addEventListener('click', sort);
        if (!!sortOptions && sortOptions[1] === 'partner_name') userLogin.className += ' ' + sortOptions[0];
        if (!!sortOptions && sortOptions[1] === 'branch_name') userName.className += ' ' + sortOptions[0];
        if (!!sortOptions && sortOptions[1] === 'city') userEmail.className += ' ' + sortOptions[0];
        if (!!sortOptions && sortOptions[1] === 'address') userRole.className += ' ' + sortOptions[0];
        userLogin.innerHTML = 'Партнер';
        userName.innerHTML = 'Филиал';
        userEmail.innerHTML = 'Город';
        userRole.innerHTML = 'Адрес';
        row.appendChild(userLogin);
        row.appendChild(userName);
        row.appendChild(userEmail);
        row.appendChild(userRole);
        document.getElementById('js-users-table').appendChild(row);

        if (users.length < 1) {
            return;
        }
        let startingId = (pageNumber - 1) * amountPerPage;
        let i = startingId;
        while (i < Math.min(users.length, startingId + amountPerPage)) {
            row = document.createElement("div");
            row.className = 'cabinet_users_table-row';
            userLogin = document.createElement("div");
            userLogin.className = 'cabinet_users_table-cell';
            userName = document.createElement("div");
            userName.className = 'cabinet_users_table-cell';
            userEmail = document.createElement("div");
            userEmail.className = 'cabinet_users_table-cell';
            userRole = document.createElement("div");
            userRole.className = 'cabinet_users_table-cell';

            userLogin.innerHTML = users[i]['partner_name'];
            userName.innerHTML = users[i]['branch_name'];
            userEmail.innerHTML = users[i]['city'];
            userRole.innerHTML = users[i]['address'];

            row.appendChild(userLogin);
            row.appendChild(userName);
            row.appendChild(userEmail);
            row.appendChild(userRole);

            document.getElementById('js-users-table').appendChild(row);
            i++;
        }

        let numberOfPages = Math.ceil(users.length / amountPerPage);
        if (numberOfPages <= 1) {
            return;
        }
        let toBegin = false;
        let toEnd = false;
        if (pageNumber > 4) {
            toBegin = true;
        }
        if (numberOfPages - pageNumber > 3) {
            toEnd = true;
        }

        for (let i = 1; i <= numberOfPages; i++) {
            if ((i === 1 || i === numberOfPages) && numberOfPages >= 7) {
                let page = document.createElement('label');
                if (i === pageNumber) {
                    page.className = 'selected';
                }
                if (toBegin === true && i === 1 && numberOfPages !== 7) {
                    page.className = ' edge';
                }
                if (toEnd === true && i === numberOfPages && numberOfPages !== 7) {
                    page.className = ' edge';
                }
                page.innerHTML = String(i);
                page.value = String(i);
                page.addEventListener('click', selectPage);
                document.getElementById('js-navigation').appendChild(page);
                continue;
            }

            let leftEdge;
            let rightEdge;

            switch (pageNumber) {
                case 1 :
                    rightEdge = 5;
                    break;
                case 2 :
                    rightEdge = 4;
                    break;
                case 3 :
                    rightEdge = 3;
                    break;
                case numberOfPages - 2:
                    leftEdge = 3;
                    break;
                case numberOfPages - 1:
                    leftEdge = 4;
                    break;
                case numberOfPages:
                    leftEdge = 5;
                    break;
                default:
                    rightEdge = 2;
                    leftEdge = 2;
            }

            if (i < pageNumber - leftEdge || i > pageNumber + rightEdge) {
                continue;
            }

            let page = document.createElement('label');
            if (i === pageNumber) {
                page.className = 'selected';
            }
            page.value = String(i);
            page.innerHTML = String(i);
            page.addEventListener('click', selectPage);
            document.getElementById('js-navigation').appendChild(page);
        }
    }


});
