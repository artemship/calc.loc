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
            let today = new Date();

            let contractStartHour = today.getHours();
            let contractStartMinute = today.getMinutes();
            let contractStartDate = formatDate(today);
            period = Number(period) + 6;
            let contractEndDate = formatDate(today, period);

            let policyholderName = $("#policyholder-surname").val() + ' ' +
                $("#policyholder-name").val() + ' ' +
                $("#policyholder-patronymic").val();
            let policyholderRegion = $('#policyholder-region').val();

            let city = $('#policyholder-city').val();
            let street = $('#policyholder-street').val();
            let house = $('#policyholder-house').val();
            let building = $('#policyholder-building').val();
            let apartment = $('#policyholder-apartment').val();
            let policyholderAddress = formatAddress(city, street, house, building, apartment);

            let serial = $('#policyholder-passport-serial').val();
            let number = $('#policyholder-passport-number').val();
            let issuedBy = $('#policyholder-passport-issued-by').val();
            let dateOfIssue = $('#policyholder-passport-date-of-issue').val();
            let codeDepartment = $('#policyholder-passport-code-department').val();
            let policyholderPassport = formatPassport(serial, number, issuedBy, dateOfIssue, codeDepartment);

            let policyholderCitizenship = $('#policyholder-citizenship').val();
            let policyholderDateOfBirth = $('#policyholder-date-of-birth').val();
            let policyholderPhoneNumber = $('#policyholder-phone-number').val();
            let policyholderEmail = $('#policyholder-email').val();
            let policyholderINN = $('#policyholder-INN').val();

            // console.log(policyholderPassport);
            // return;

            carAge = today.getFullYear() - carAge;
            let autoNumber = $("#auto-number__number").val() + $("#auto-number__region").val();
            let enginePower = $("#engine-power").val();
            let engineVolume = $("#engine-volume").val();
            let vinId = $("#vin-id").val();
            let keysAmount = $("#keys-amount").val();
            let vehicleCategory = $("#vehicle-category").val();
            let permissibleMaxWeight = $("#permissible-max-weight").val();
            let ptsSerialNumber = $("#pts-serial").val() + ' ' + $("#pts-number").val();
            let stsSerialNumber = $("#sts-serial").val() + ' ' + $("#sts-number").val();



            console.log(vinId);
            console.log(keysAmount);
            console.log(vehicleCategory);
            console.log(permissibleMaxWeight);
            // return;
            $.ajax({
                url: '/policy',
                type: 'POST',
                // dataType: 'JSON',
                data: {
                    contractStartHour: contractStartHour,
                    contractStartMinute: contractStartMinute,
                    contractStartDate: contractStartDate,
                    policyholderName: policyholderName,
                    policyholderRegion: policyholderRegion,
                    policyholderAddress: policyholderAddress,
                    policyholderPassport: policyholderPassport,
                    policyholderCitizenship: policyholderCitizenship,
                    policyholderDateOfBirth: policyholderDateOfBirth,
                    policyholderPhoneNumber: policyholderPhoneNumber,
                    policyholderEmail: policyholderEmail,
                    policyholderINN: policyholderINN,
                    contractEndDate: contractEndDate,


                    mark: mark,
                    model: model,
                    carAge: carAge,
                    autoNumber: autoNumber,
                    enginePower: enginePower,
                    engineVolume: engineVolume,
                    vinId: vinId,
                    keysAmount: keysAmount,
                    vehicleCategory: vehicleCategory,
                    permissibleMaxWeight: permissibleMaxWeight,
                    ptsSerialNumber: ptsSerialNumber,
                    stsSerialNumber: stsSerialNumber,


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

    function formatDate(date, months) {
        let dd = date.getDate();
        if (months > 0) {
            date.setMonth(date.getMonth() + months);
            if (dd > date.getDate()) {
                date.setDate(0);
            } else {
                date.setDate(date.getDate() - 1);
            }
            dd = date.getDate();
        }
        if (dd < 10) dd = '0' + dd;

        let mm = date.getMonth() + 1;
        if (mm < 10) mm = '0' + mm;
        // let yy = date.getFullYear() % 100;
        // if (yy < 10) yy = '0' + yy;
        let yy = date.getFullYear();
        return dd + '.' + mm + '.' + yy;
    }

    function formatAddress(city, street, house, building, apartment) {
        city = city + ', ';
        street = street + ', ';
        house = 'д ' + house;
        building = (!! building) ? '/' + building + ', ': (!! apartment) ? ', ': '' ;
        apartment = (!! apartment) ? 'кв ' + apartment : '' ;

        return city + street + house + building + apartment;
    }

    function formatPassport(serial, number, issuedBy, dateOfIssue, codeDepartment) {
        serial = serial + ' ';
        number = number + ' ';
        issuedBy = issuedBy + ' ';
        dateOfIssue = dateOfIssue + ' ';
        codeDepartment = 'К/П ' + codeDepartment;

        return serial + number + issuedBy + dateOfIssue + codeDepartment;
    }

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

