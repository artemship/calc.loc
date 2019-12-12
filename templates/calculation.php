<section id="form-parameter">

    <form>
        <div class="container">
            <div class="row">
            <div class="col-6 form-group label-font">
                <label for="exampleFormControlSelect1">Марка</label>
                <select class="form-control" id="js-select-mark" onchange="nulltariff()">
                    <option value="0">--Выбрать марку--</option>
                    <?php if (!empty($marks)):
                        foreach ($marks as $mark): ?>
                            <option value="<?= $mark; ?>"><?= $mark ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div>

            <div class="col-6 form-group label-font">
                <label for="exampleFormControlSelect1">Модель</label>
                <select class="form-control" id="js-select-model" onchange="nulltariff()" disabled>
                    <option value="0">--Выбрать модель--</option>
                </select>
<!--                <span class="model"></span>-->
            </div> </div>

            <div class="row">

            <div class="col-6 form-group label-font">
                <label for="exampleFormControlSelect1">Год выпуска</label>
                <select class="form-control " id="js-select-car-age" onchange="nulltariff()">
                    <?php if (!empty($carsAge)):
                        foreach ($carsAge as $key => $carAge): ?>
                            <option value="<?= $key; ?>"><?= $carAge ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div>

            <div class="col-6 form-group label-font">
                <label for="exampleFormControlSelect1">Страховой риск</label>
                <select class="form-control " id="js-select-insurance" onchange="nulltariff()">
                    <?php if (!empty($insurances)):
                        foreach ($insurances as $key => $insurance): ?>
                            <option value="<?= $key; ?>"><?= $insurance ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div> </div>

            <div class="row">

            <div class="col-6 form-group label-font">
                <label for="exampleFormControlSelect1">Франшиза</label>
                <select class="form-control" id="js-select-franchise" onchange="nulltariff()">
                    <?php if (!empty($franchises)):
                        foreach ($franchises as $franchise): ?>
                            <option value="<?= $franchise; ?>"><?= $franchise . ' %' ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div>

            <div class="col-6 form-group label-font">
                <label for="exampleFormControlSelect1">Возраст водителя</label>
                <input class="form-control" type="text" id="js-age" placeholder="Возраст водителя" onchange="nulltariff()">
                <p class="alert-danger" id="error_v"></p>

            </div></div>

            <div class="row">

            <div class="col-6 form-group label-font">
                <label for="exampleFormControlSelect1">Стаж</label>
                <input class="form-control" type="text" id="js-experience" placeholder="Стаж" onchange="nulltariff()">
                <p class="alert-danger" id="error_s"></p>
            </div>

            <div class="col-6 form-group label-font">
                <label for="exampleFormControlSelect1">Срок страхования</label>
                <select class="form-control " id="js-select-period">
                    <?php if (!empty($periods)):
                        foreach ($periods as $key => $period): ?>
                            <option value="<?= $key; ?>"><?= $period ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div> </div>

            <div class="container">
<div class="row">
            

            <div class="col-9 custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" value="" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">
                                        ТС находится на гарантии производителя
                </label>
            </div>

            <div class="col-9 custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" value="" id="customCheck2">
                <label class="custom-control-label" for="customCheck2">
                        Отсутствует выплата без справок из компетентных органов (один стеклянный элемент)
                </label>
            </div>

            <div class="col-9 custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" value="" id="customCheck3">
                <label class="custom-control-label" for="customCheck3">
                    
                    Отсутствует выплата без справок из компетентных органов (один кузовной элемент)
                </label>
            </div>

            <div class="col-9 custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" value="" id="customCheck4">
                <label class="custom-control-label" for="customCheck4">
                    
                    Агрегатная
                </label>
                </div>
</div>
                        </div>
                        </br>

                        <div class="container">
<div class="row">
                <div class="col-6 form-group label-font">
                <label for="exampleFormControlSelect1">Порядок оплаты страховой премии</label>
                <select class="form-control " id="js-select-payment-procedure">
                    <?php if (!empty($paymentProcedures)):
                        foreach ($paymentProcedures as $key => $option): ?>
                            <option value="<?= $key; ?>"><?= $option ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div>


            <div class="col-6 form-group">
                <label for="exampleFormControlSelect1"><b>Тариф</b></label>
                <input class="form-control" type="text" id="tariff" disabled>
            </div>

</div>            

            <div class=" col-12 text-right ">
                <button type="button" class="btn btn-secondary" id="js-btn-submit">Рассчитать</button>
            </div>
            </div>
        </div></div>
    </form>
</section>




