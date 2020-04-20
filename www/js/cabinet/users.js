$(function () {
    $(".js-provide-access").click(function (event) {
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
                // alert(group + ageCar + insuranceRisk);
                // alert(userId + isAccessed);
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

    });
});
