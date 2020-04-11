<h1>Калькулятор КАСКО</h1>

<div class="calculation-container">
    <form action="policy" method="post">


        <div class="table calculation">

            <div class="table-row">
                <label class="calculation-label">Марка</label>
                <select class="calculation-content" id="js-select-mark" onchange="nulltariff()">
                    <option value="0">--Выбрать марку--</option>
                    <?php if (!empty($marks)):
                        foreach ($marks as $mark): ?>
                            <option value="<?= $mark; ?>"><?= $mark ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div>

            <div class="table-row">
                <label class="calculation-label">Модель</label>
                <select class="calculation-content" id="js-select-model" onchange="nulltariff()" disabled>
                    <option value="0">--Выбрать модель--</option>
                </select>
            </div>

            <div class="table-row">
                <label class="calculation-label">Год выпуска</label>
                <select class="calculation-content" id="js-select-car-age" onchange="nulltariff()">
                    <?php if (!empty($carsAge)):
                        foreach ($carsAge as $key => $carAge): ?>
                            <option value="<?= $key; ?>"><?= $carAge ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div>

            <div class="table-row">
                <label class="calculation-label">Страховой риск</label>
                <select class="calculation-content" id="js-select-insurance" onchange="nulltariff()">
                    <?php if (!empty($insurances)):
                        foreach ($insurances as $key => $insurance): ?>
                            <option value="<?= $key; ?>"><?= $insurance ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div>

            <div class="table-row">
                <label class="calculation-label">Франшиза</label>
                <select class="calculation-content" id="js-select-franchise" onchange="nulltariff()">
                    <?php if (!empty($franchises)):
                        foreach ($franchises as $franchise): ?>
                            <option value="<?= $franchise; ?>"><?= $franchise . ' %' ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div>

            <div class="table-row">
                <label class="calculation-label">Порядок оплаты страховой премии</label>
                <select class="calculation-content" id="js-select-payment-procedure">
                    <?php if (!empty($paymentProcedures)):
                        foreach ($paymentProcedures as $key => $option): ?>
                            <option value="<?= $key; ?>"><?= $option ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div>

            <div class="table-row">
                <label class="calculation-label">Срок страхования</label>
                <select class="calculation-content" id="js-select-period">
                    <?php if (!empty($periods)):
                        foreach ($periods as $key => $period):
                            if ($key === 6): ?>
                                <option value="<?= $key; ?>" selected><?= $period ?></option>
                                <? continue;
                            endif; ?>
                            <option value="<?= $key; ?>"><?= $period ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div>

            <div class="table-row">
                <label class="calculation-label">Страховая сумма</label>
                <input class="calculation-content" type="text" id="js-insurance-sum" value="1100000">
            </div>

            <div class="table-row">
                <label class="calculation-label">Возраст водителя</label>
                <input class="calculation-content" type="text" id="js-age" value="22" onchange="nulltariff()">
            </div>

            <div class="table-row">
                <label class="calculation-label">Стаж</label>
                <input class="calculation-content" type="text" id="js-experience" value="1" onchange="nulltariff()">
            </div>

            <div class="table-row">
                <label class="calculation-label"></label>
                <label class="b-contain">
                    <span>Агрегатная</span>
                    <input type="checkbox" value="" id="customCheck1" checked>
                    <div class="b-input"></div>
                </label>
            </div>

            <div class="table-row">
                <label class="calculation-label"></label>
                <label class="b-contain">
                    <span>ТС находится на гарантии производителя</span>
                    <input type="checkbox" value="" id="customCheck2" checked>
                    <div class="b-input"></div>
                </label>
            </div>

            <div class="table-row">
                <label class="calculation-label"></label>
                <label class="b-contain">
                    <span>Отсутствует выплата без справок из компетентных органов (один стеклянный элемент)</span>
                    <input type="checkbox" value="" id="customCheck3" checked>
                    <div class="b-input"></div>
                </label>
            </div>

            <div class="table-row">
                <label class="calculation-label"></label>
                <label class="b-contain">
                    <span>Отсутствует выплата без справок из компетентных органов (один кузовной элемент)</span>
                    <input type="checkbox" value="" id="customCheck4" checked>
                    <div class="b-input"></div>
                </label>
            </div>

            <div class="table-row">
                <label class="calculation-label">Тариф</label>
                <input class="calculation-content" type="text" id="tariff" disabled>
            </div>

            <div class="table-row ta-right">
                <label class="calculation-label"></label>
<!--                <button type="button" class="btn btn-secondary" id="js-btn-submit">Рассчитать</button>-->
<!--                <input class="calculation-button" type="submit" value="Назад">-->
<!--                <input class="calculation-button" type="submit" value="Далее">-->
                <button type="button" class="calculation-button btn btn-secondary" id="js-btn-submit">Рассчитать</button>
                <button type="button" class="calculation-button btn btn-secondary" id="js-btn-print">Печать</button>
            </div>

        </div>

        <div  class="flex-row center">

        </div>



<!--        <div class="form">-->
<!--            <div class="form__row">-->
<!--                <div class="form__label">-->
<!--                    <span>ПТС</span>-->
<!--                </div>-->
<!--                <div class="form__content">-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form__row">-->
<!--                <div class="form__label">-->
<!--                    <span>VIN number</span>-->
<!--                </div>-->
<!--                <div class="form__content">-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->



    </form>
</div>