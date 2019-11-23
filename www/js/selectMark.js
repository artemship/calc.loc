$(function () {
    var mark = $("#js-select-mark").val();
    // $.ajax({
    //     type: 'POST',
    //     url: '/ajax/select/mark',
    //     data: {mark: mark},
    //     success: function (data) {
    //         $(".model").html(data);
    //     }
    // });
    $("#js-select-mark").change(function () {
        var mark = $("#js-select-mark").val();
        if (mark == 0) {

        }
        $.ajax({
            type: 'POST',
            url: '/ajax/select/mark',
            data: {mark: mark},
            success: function (data) {
                // $(".model").html(data);
                if (mark == 0) {
                    $("#js-select-model").prop("disabled", true);
                    $("#base-tariff").val('');
                } else {
                    $("#js-select-model").prop("disabled", false);
                    $("#js-select-model").html(data);
                    //alert(data);

                }

                // alert('123');
            }
        });
    });
    $("#js-btn-submit").click(function () {
        var mark = $("#js-select-mark").val();
        var group = $("#js-select-model").val();
        var ageCar = $("#js-select-age-car").val();
        var insuranceRisk = $("#js-select-insurance-risk").val();
        if (mark == 0) {
            $("#base-tariff").val('Выберите марку');
            return;
        }
        $.ajax({
            type: 'POST',
            url: '/ajax/btn/submit',
            data: {group: group, ageCar: ageCar, insuranceRisk: insuranceRisk},
            success: function (data) {
                $("#base-tariff").val(data);
                //alert(data);
                // alert(group + ageCar + insuranceRisk);
            }
        });
        // alert(group + ageCar + insuranceRisk);
    });

});