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
                    $("#tariff").val('');
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
        var carAge = $("#js-select-car-age").val();
        var insurance = $("#js-select-insurance").val();
        var franchise = $("#js-select-franchise").val();
        var age = $("#js-age").val();
        var experience = $("#js-experience").val();
        var period = $("#js-select-period").val();
        var paymentProcedure = $("#js-select-payment-procedure").val();
        var isWarranty = false;
        var noGlassPayment = false;
        var noBodyPayment = false;
        var isAggregate = false;
        // if (mark == 0) {
        //     $("#tariff").val('Выберите марку');
        //     return;
        // }
        $.ajax({
            url: '/ajax/btn/submit',
            type: 'POST',
            dataType: 'JSON',
            data: {
                group: group,
                carAge: carAge,
                insurance: insurance,
                franchise: franchise,
                age: age,
                experience: experience,
                period: period,
                paymentProcedure: paymentProcedure,
                isWarranty: isWarranty,
                noGlassPayment: noGlassPayment,
                noBodyPayment: noBodyPayment,
                isAggregate: isAggregate
            },
            success: function (data) {
                $("#tariff").val(data);
                //alert(data);
                // alert(group + ageCar + insuranceRisk);
            }
        });
        // alert(group + ageCar + insuranceRisk);
    });

});