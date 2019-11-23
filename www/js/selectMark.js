$(function () {
    var mark = $("#js-select-mark").val();
    $.ajax({
        type: 'POST',
        url: '/ajax/select/mark',
        data: {mark: mark},
        success: function (data) {
            $(".model").html(data);
        }
    });
    $("#js-select-mark").change(function () {
        var mark = $("#js-select-mark").val();
        if (mark == 0) {

        }
        $.ajax({
            type: 'POST',
            url: '/ajax/select/mark',
            data: {mark: mark},
            success: function (data) {
                $(".model").html(data);
            }
        });
    });
    $("#js-btn-submit").click(function () {
        var group = $("#js-select-model").val();
        var ageCar = $("#js-select-age-car").val();
        var insuranceRisk = $("#js-select-insurance-risk").val();
        if (group == 0) {
            alert('Выберите марку и модель');
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