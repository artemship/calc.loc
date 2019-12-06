<section id="form-parameter">

    <form>
        <div class="container">
            <div class="col-5 form-group">
                <label for="exampleFormControlSelect1">Марка</label>
                <select class="form-control" id="js-select-mark">
                    <option value="0">--Выбрать марку--</option>
                    <?php if (!empty($marks)):
                        foreach ($marks as $mark): ?>
                            <option value="<?= $mark; ?>"><?= $mark ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div>

            <div class="col-5 form-group">
                <label for="exampleFormControlSelect1">Модель</label>
                <select class="form-control" id="js-select-model" disabled>
                    <option value="0">--Выбрать модель--</option>
                </select>
<!--                <span class="model"></span>-->
            </div>

            <div class="col-5 form-group">
                <label for="exampleFormControlSelect1">Год выпуска</label>
                <select class="form-control " id="js-select-car-age">
                    <?php if (!empty($carsAge)):
                        foreach ($carsAge as $key => $carAge): ?>
                            <option value="<?= $key; ?>"><?= $carAge ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div>

            <div class="col-5 form-group">
                <label for="exampleFormControlSelect1">Страховой риск</label>
                <select class="form-control " id="js-select-insurance">
                    <?php if (!empty($insurances)):
                        foreach ($insurances as $key => $insurance): ?>
                            <option value="<?= $key; ?>"><?= $insurance ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div>

            <div class="col-5 form-group">
                <label for="exampleFormControlSelect1">Франшиза</label>
                <select class="form-control" id="js-select-franchise">
                    <?php if (!empty($franchises)):
                        foreach ($franchises as $franchise): ?>
                            <option value="<?= $franchise; ?>"><?= $franchise . ' %' ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div>

            <div class="col-5 form-group">
                <label for="exampleFormControlSelect1">Возраст водителя</label>
                <input class="form-control" type="text" id="js-age" placeholder="Возраст водителя">
            </div>

            <div class="col-5 form-group">
                <label for="exampleFormControlSelect1">Стаж</label>
                <input class="form-control" type="text" id="js-experience" placeholder="Стаж водителя">
            </div>

            <div class="col-5 form-group">
                <label for="exampleFormControlSelect1">Срок страхования</label>
                <select class="form-control " id="js-select-period">
                    <?php if (!empty($periods)):
                        foreach ($periods as $key => $period): ?>
                            <option value="<?= $key; ?>"><?= $period ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div>

            <div class="col-5 form-group">
                <label for="exampleFormControlSelect1">Порядок оплаты страховой премии</label>
                <select class="form-control " id="js-select-payment-procedure">
                    <?php if (!empty($paymentProcedures)):
                        foreach ($paymentProcedures as $key => $option): ?>
                            <option value="<?= $key; ?>"><?= $option ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="">
                    ТС находится на гарантии производителя
                </label>
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="">
                    Отсутствует выплата без справок из компетентных органов (один стеклянный элемент)
                </label>
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="">
                    Отсутствует выплата без справок из компетентных органов (один кузовной элемент)
                </label>
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="">
                    Агрегатная
                </label>
            </div>

            <div class="col-5 form-group">
                <label for="exampleFormControlSelect1">Тариф</label>
                <input class="form-control" type="text" id="tariff" disabled>
            </div>

            <div class=" col-5 text-right ">
                <button type="button" class="btn btn-secondary" id="js-btn-submit">Рассчитать</button>
            </div>

        </div>
    </form>

</section>
