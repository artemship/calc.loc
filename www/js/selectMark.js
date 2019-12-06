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
        var isWarranty = 0;
        var noGlassPayment = 0;
        var noBodyPayment = 0;
        var isAggregate = 0;

        if (mark == 0) {
            $("#tariff").val('Выберите марку');
            return;
        }
        if (age < 18) {
            //$("#js-age").val('Возраст должен быть больше 18 лет!');
            document.getElementById("error_v").innerHTML = "Возраст должен быть больше 18 лет!";
            document.getElementById("js-age").style.borderColor = "#AA0000";
            document.getElementById("error_v").style.fontFamily = "cursive";
        } else {
            document.getElementById("error_v").innerHTML = null;
            document.getElementById("js-age").style.borderColor = null;
        }
        if ((age - experience) < 18) {
            document.getElementById("error_s").innerHTML = "Стаж указан неверно, проверьте введенные данные!";
            document.getElementById("js-experience").style.borderColor = "#AA0000";
            document.getElementById("error_s").style.fontFamily = "cursive";
        } else {
            document.getElementById("error_s").innerHTML = null;
            document.getElementById("js-experience").style.borderColor = null;
            //$("#js-experience").val('Стаж указан неверно, проверьте введенные данные!');
        }
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

function nulltariff() {
    document.getElementById("tariff").value = '';
}