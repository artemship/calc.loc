$(function () {
    // var mark = $("#js-select-mark").val();
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
                if (mark == 0) {
                    $("#js-select-model").prop("disabled", true);
                    $("#tariff").val('');
                } else {
                    $("#js-select-model").prop("disabled", false);
                    $("#js-select-model").html(data);
                }
            }
        });
    });

    $("#js-btn-submit").click(function () {
        // var mark = $("#js-select-mark").val();
        // // var mark = $("#js-mark").val();
        // var model = $("#js-select-model option:selected").text();
        // var group = $("#js-select-model").val();
        // var carAge = $("#js-select-car-age").val();
        // var insurance = $("#js-select-insurance").val();
        // var franchise = $("#js-select-franchise").val();
        // var age = $("#js-age").val();
        // var experience = $("#js-experience").val();
        // var period = $("#js-select-period").val();
        // var paymentProcedure = $("#js-select-payment-procedure").val();
        // var insuranceSum = $("#js-insurance-sum").val();
        // var isWarranty = 0;
        // var noGlassPayment = 0;
        // var noBodyPayment = 0;
        // var isAggregate = 0;
        // if (mark == 0) {
        //     $("#tariff").val('Выберите марку');
        //     return;
        // }
        // if (age < 18) {
        //     //$("#js-age").val('Возраст должен быть больше 18 лет!');
        //     document.getElementById("error_v").innerHTML = "Возраст должен быть больше 18 лет!";
        //     document.getElementById("js-age").style.borderColor = "#AA0000";
        //     document.getElementById("error_v").style.fontFamily = "cursive";
        //     return;
        // } else {
        //     document.getElementById("error_v").innerHTML = null;
        //     document.getElementById("js-age").style.borderColor = null;
        // }
        // if (((age - experience) < 18) || (experience == '')) {
        //     document.getElementById("error_s").innerHTML = "Стаж указан неверно, проверьте введенные данные!";
        //     document.getElementById("js-experience").style.borderColor = "#AA0000";
        //     document.getElementById("error_s").style.fontFamily = "cursive";
        //     return;
        // } else {
        //     document.getElementById("error_s").innerHTML = null;
        //     document.getElementById("js-experience").style.borderColor = null;
        //     //$("#js-experience").val('Стаж указан неверно, проверьте введенные данные!');
        // }
        // if (customCheck1.checked) {
        //     isWarranty = 1;
        // }
        // if (customCheck2.checked) {
        //     noGlassPayment = 1;
        // }
        // if (customCheck3.checked) {
        //     noBodyPayment = 1;
        // }
        // if (customCheck4.checked) {
        //     isAggregate = 1;
        // }

        // $.ajax({
        //     url: '/ajax/btn/submit',
        //     type: 'POST',
        //     dataType: 'JSON',
        //     data: {
        //         mark: mark,
        //         model: model,
        //         group: group,
        //         carAge: carAge,
        //         insurance: insurance,
        //         franchise: franchise,
        //         age: age,
        //         experience: experience,
        //         period: period,
        //         paymentProcedure: paymentProcedure,
        //         insuranceSum: insuranceSum,
        //         isWarranty: isWarranty,
        //         noGlassPayment: noGlassPayment,
        //         noBodyPayment: noBodyPayment,
        //         isAggregate: isAggregate
        //     },
        //     success: function (data) {
        //         $("#tariff").val(data);
        //         // alert(group + ageCar + insuranceRisk);
        //     }
        // });

        // alert(group + ageCar + insuranceRisk);
    });

    $(".btn-secondary").click(function (event) {
        let target = event.target;
        if ((target.id !== "js-btn-submit") && (target.id !== "js-btn-print")) return;
        var mark = $("#js-select-mark").val();
        // var mark = $("#js-mark").val();
        var model = $("#js-select-model option:selected").text();
        var group = $("#js-select-model").val();
        var carAge = $("#js-select-car-age").val();
        var insurance = $("#js-select-insurance").val();
        var franchise = $("#js-select-franchise").val();
        var age = $("#js-age").val();
        var experience = $("#js-experience").val();
        var period = $("#js-select-period").val();
        var paymentProcedure = $("#js-select-payment-procedure").val();
        var insuranceSum = $("#js-insurance-sum").val();
        var isWarranty = 0;
        var noGlassPayment = 0;
        var noBodyPayment = 0;
        var isAggregate = 0;
        if (mark == 0) {
            $("#tariff").val('Выберите марку');
            return;
        }

        // if (age < 18) {
        //     ///$("#js-age").val('Возраст должен быть больше 18 лет!');
        //     document.getElementById("error_v").innerHTML = "Возраст должен быть больше 18 лет!";
        //     document.getElementById("js-age").style.borderColor = "#AA0000";
        //     document.getElementById("error_v").style.fontFamily = "cursive";
        //     return;
        // } else {
        //     document.getElementById("error_v").innerHTML = null;
        //     document.getElementById("js-age").style.borderColor = null;
        // }
        // if (((age - experience) < 18) || (experience == '')) {
        //     document.getElementById("error_s").innerHTML = "Стаж указан неверно, проверьте введенные данные!";
        //     document.getElementById("js-experience").style.borderColor = "#AA0000";
        //     document.getElementById("error_s").style.fontFamily = "cursive";
        //     return;
        // } else {
        //     document.getElementById("error_s").innerHTML = null;
        //     document.getElementById("js-experience").style.borderColor = null;
        //     ///$("#js-experience").val('Стаж указан неверно, проверьте введенные данные!');
        // }

        if (customCheck1.checked) {
            isAggregate = 1;
        }
        if (customCheck2.checked) {
            isWarranty = 1;
        }
        if (customCheck3.checked) {
            noGlassPayment = 1;
        }
        if (customCheck4.checked) {
            noBodyPayment = 1;
        }

        if (target.id === "js-btn-submit") {
            $.ajax({
                url: '/ajax/btn/submit',
                type: 'POST',
                dataType: 'JSON',
                data: {
                    mark: mark,
                    model: model,
                    group: group,
                    carAge: carAge,
                    insurance: insurance,
                    franchise: franchise,
                    age: age,
                    experience: experience,
                    period: period,
                    paymentProcedure: paymentProcedure,
                    insuranceSum: insuranceSum,
                    isWarranty: isWarranty,
                    noGlassPayment: noGlassPayment,
                    noBodyPayment: noBodyPayment,
                    isAggregate: isAggregate
                },
                success: function (data) {
                    $("#tariff").val(data);
                    // alert(group + ageCar + insuranceRisk);
                }
            });
        }

        if (target.id === "js-btn-print") {
            $.ajax({
                url: '/policy',
                type: 'POST',
                // dataType: 'JSON',
                data: {
                    mark: mark,
                    model: model,
                    group: group,
                    carAge: carAge,
                    insurance: insurance,
                    franchise: franchise,
                    age: age,
                    experience: experience,
                    period: period,
                    paymentProcedure: paymentProcedure,
                    insuranceSum: insuranceSum,
                    isWarranty: isWarranty,
                    noGlassPayment: noGlassPayment,
                    noBodyPayment: noBodyPayment,
                    isAggregate: isAggregate
                },
                success: function (data) {
                    // $("#tariff").val(data);
                    // alert(data);
                        var windowForPrint = window.open();
                        yourInformation = data;// Сюда что мы хотим печатать.
                        windowForPrint.document.write(yourInformation);
                        windowForPrint.print();
                        // windowForPrint.close();
                        // window.open('/policy').print();

                    // alert(group + ageCar + insuranceRisk);
                }
            });
            // alert(target.id);
        }
        // alert(target.id);
    });

    // $("#js-btn-print").click(function () {
    //     var windowForPrint = window.open('policy');
    //     //     yourInformation = '';// Сюда что мы хотим печатать.
    //     // windowForPrint.document.write(yourInformation);
    //     windowForPrint.print();
    //     // windowForPrint.close();
    //     // window.open('/policy').print();
    //     windowForPrint.onafterprint
    // })

});


function nulltariff() {
    document.getElementById("tariff").value = '';
}

