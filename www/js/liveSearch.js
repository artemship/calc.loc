$(function (){

    var marks = [];
    var xhr = new XMLHttpRequest();
    xhr.responseType = 'json';
    xhr.open('GET', 'js/get/marks', true);
    xhr.onload = function () {
        marks = xhr.response;
        // console.log(marks);
    };
    xhr.send(null);

    const markEdit = document.getElementById('js-mark');
    const markList = document.getElementById('js-mark-list');
    markEdit.addEventListener('input', () => searchMark(markEdit.value));
    markEdit.addEventListener("keyup", function (event) {
        if (event.keyCode === 13) {
            markEdit.value = markList.getElementsByTagName('div').item(0).innerText;
            markEdit.blur();
        }
    });

    markEdit.onfocus = function () {
        markEdit.select();
        searchMark(markEdit.value);
    };

    markEdit.onblur = async => setTimeout(function () {
        markList.innerHTML = '';
        var marq = $("#js-mark").val();
        if (marks.indexOf(marq) === -1) {
            $("#js-select-model").prop("disabled", true);
            $("#tariff").val('');
            return;
        }
        $.ajax({
            type: 'POST',
            url: '/ajax/select/mark',
            data: {mark: marq},
            success: function (data) {
                if (marq == 0) {
                    $("#js-select-model").prop("disabled", true);
                    $("#tariff").val('');
                } else {
                    $("#js-select-model").prop("disabled", false);
                    $("#js-select-model").html(data);
                }
            }
        });
    }, 90);

    // markEdit.addEventListener("keyup", function(event) {
    //     // Number 13 is the "Enter" key on the keyboard
    //     if (event.keyCode === 13) {
    //         // Cancel the default action, if needed
    //         event.preventDefault();
    //         // Trigger the button element with a click
    //         markList.innerHTML = '';
    //         console.log(markList);
    //         markEdit.value = markList[1];
    //     }
    // });
    // markOption.onclick = function () {
    //     markEdit.value = markOption.value;
    // };

    const searchMark = async searchText => {
        let matches = marks.filter(mark => {
            const regex = new RegExp(`${searchText}`, 'gi');
            return mark.match(regex);
        });
        // console.log(matches);
        // if (searchText.length === 0) {
        //     matches = [];
        // }
        //
        if (matches.length === 0) {
            markList.innerHTML = '';
        }

        outputHtml(matches);
    };

    const outputHtml = matches => {
        if (matches.length > 0) {
            // const html = matches.map(match => `<li class="mark-option" onclick="selectMark()">${match}</li>`).join('');
            // console.log(html);
            // markList.innerHTML = '<ul class="ultag">' + html + '</ul>';
            markList.innerHTML = '<ul id="ultag"></ul>';
            document.querySelector('#ultag').addEventListener('click', function (e) {
                document.querySelector("#js-mark").value = e.target.outerText;
            });
            let i = 0;
            while (i < matches.length) {
                const li = document.createElement("li");
                li.className = 'mark-option';
                const div = document.createElement("div");
                // li.onclick = selectMark;
                div.innerHTML = matches[i];
                li.appendChild(div);
                document.getElementById('ultag').appendChild(li);
                i++;
            }
            // const html = matches.map(match => `${match}`);
            // console.log(html);
            // const div = document.createElement("div");
            // div.innerHTML = 'Check';
            // div.onclick = selectMark;
            // markList.appendChild(div);
        }
    };

});