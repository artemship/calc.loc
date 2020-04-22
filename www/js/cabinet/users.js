$(function () {

    var users = [];
    var xhr = new XMLHttpRequest();
    xhr.responseType = 'json';
    xhr.open('GET', '/js/get/users', true);
    xhr.onload = function () {
        users = xhr.response;
        // console.log(users);
        outputHtml(users);
    };
    xhr.send(null);

    $("#js-amount-per-page").change(function () {
        $('#js-users-table').empty();
        outputHtml(users);
    })

    function outputHtml() {
        // const outputHtml = users => {
        let amountPerPage = document.getElementById("js-amount-per-page").value;

        let row = document.createElement("div");
        row.className = 'cabinet_users_table-title';

        let userLogin = document.createElement("div");
        userLogin.className = 'cabinet_users_table-cell';
        let userName = document.createElement("div");
        userName.className = 'cabinet_users_table-cell';
        let userEmail = document.createElement("div");
        userEmail.className = 'cabinet_users_table-cell';
        let userRole = document.createElement("div");
        userRole.className = 'cabinet_users_table-cell';
        let userAccess = document.createElement("div");
        userAccess.className = 'cabinet_users_table-cell';

        userLogin.innerHTML = 'Логин';
        userName.innerHTML = 'Имя';
        userEmail.innerHTML = 'Email';
        userRole.innerHTML = 'Права';
        userAccess.innerHTML = 'Доступ';
        row.appendChild(userLogin);
        row.appendChild(userName);
        row.appendChild(userEmail);
        row.appendChild(userRole);
        row.appendChild(userAccess);
        document.getElementById('js-users-table').appendChild(row);


        if (users.length > 0) {
            let i = 0;
            while (i < amountPerPage) {
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

                userAccess = document.createElement("div");
                userAccess.className = 'cabinet_users_table-cell';

                const labelSwitch = document.createElement("label");
                labelSwitch.className = 'switch';

                const inputCheckBox = document.createElement("input");
                inputCheckBox.className = 'js-provide-access';
                inputCheckBox.type = 'checkbox';
                inputCheckBox.name = users[i]['id'];
                if (users[i]['is_accessed'] === '1') {
                    inputCheckBox.setAttribute('checked', '');
                }
                inputCheckBox.addEventListener('click', switchAccess);

                const span = document.createElement("span");
                span.className = 'slider round';


                labelSwitch.appendChild(inputCheckBox);
                labelSwitch.appendChild(span);
                userAccess.appendChild(labelSwitch);


                userLogin.innerHTML = users[i]['login'];
                userName.innerHTML = users[i]['last_name'] + ' ' + users[i]['first_name'];
                userEmail.innerHTML = users[i]['email'];
                userRole.innerHTML = users[i]['role'];

                row.appendChild(userLogin);
                row.appendChild(userName);
                row.appendChild(userEmail);
                row.appendChild(userRole);
                row.appendChild(userAccess);

                document.getElementById('js-users-table').appendChild(row);
                i++;
            }

        }
    }

    function switchAccess(event) {
        let element = event.target;
        let userId = element.name;
        let isAccessed = element.checked;
        let previousState = !element.checked;
        $.ajax({
            url: '/ajax/provide/access',
            type: 'POST',
            dataType: 'JSON',
            // async: false,
            data: {
                userId: userId,
                isAccessed: isAccessed
            },
            success: function (data) {
                // $("#tariff").val(data);
                // alert(data);
                // alert(data.blabla);
                if (data == 0) {
                    // alert(data);
                    $(element).prop('checked', previousState);
                }
            },
            error: function (data) {
                $(element).prop('checked', previousState);
            }
        });
    }



});
