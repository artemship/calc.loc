<h1></h1>
<form action="policy" method="post">

    <h2>Калькулятор КАСКО</h2>
    <div class="calculation-container">


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
                <button type="button" class="calculation-button btn btn-secondary" id="js-btn-submit">Рассчитать
                </button>
                <button type="button" class="calculation-button btn btn-secondary" id="js-btn-print">Печать</button>
            </div>

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


    </div>


    <h2>Сведения о транспортном средстве</h2>
    <div class="calculation-container">
        <div class="table calculation">

            <div class="table-row">
                <label class="calculation-label">Государственный регистрационный знак</label>
                <div class="flex-row">
                    <input class="calculation-content" id="auto-number__number" type="text" placeholder="A 111 AA"
                           maxlength="6">
                    <input class="calculation-content" id="auto-number__region" type="text" placeholder="111"
                           maxlength="3">
                    <input class="calculation-content ta-center" id="auto-number__country" type="text" placeholder="RUS"
                           disabled>
                </div>
            </div>

            <div class="table-row">
                <label class="calculation-label">Идентификационный номер VIN</label>
                <input class="calculation-content" id="vin-id" type="text"
                       maxlength="17">
            </div>

            <div class="table-row">
                <label class="calculation-label">Категория ТС</label>
                <input class="calculation-content" id="vehicle-category" type="text">
            </div>

            <div class="table-row">
                <label class="calculation-label">Мощность двигателя, л.с.</label>
                <input class="calculation-content" id="engine-power" type="text">
            </div>

            <div class="table-row">
                <label class="calculation-label">Объем двигателя, см3</label>
                <input class="calculation-content" id="engine-volume" type="text">
            </div>

            <div class="table-row">
                <label class="calculation-label">Количество ключей замка зажигания</label>
                <input class="calculation-content" id="keys-amount" type="text">
            </div>

            <div class="table-row">
                <label class="calculation-label">Разрешенная макс. масса, кг</label>
                <input class="calculation-content" id="permissible-max-weight" type="text">
            </div>

            <div class="table-row">
                <label class="calculation-label">Серия и № ПТС / ПСМ</label>
                <div class="flex-row">
                    <input class="calculation-content document-serial" id="pts-serial" type="text" placeholder="Серия"
                           maxlength="4">
                    <input class="calculation-content document-number" id="pts-number" type="text" placeholder="Номер"
                           maxlength="6">
                </div>
            </div>

            <div class="table-row">
                <label class="calculation-label">Серия и № СТС</label>
                <div class="flex-row">
                    <input class="calculation-content document-serial" id="sts-serial" type="text" placeholder="Серия"
                           maxlength="4">
                    <input class="calculation-content document-number" id="sts-number" type="text" placeholder="Номер"
                           maxlength="6">
                </div>
            </div>

        </div>
    </div>

    <h2>Страхователь</h2>
    <div class="calculation-container">
        <div class="table calculation">

            <div class="table-row fix">
                <label class="calculation-label">ЛИЧНЫЕ ДАННЫЕ</label>
            </div>

            <div class="table-row">
                <label class="calculation-label">Фамилия</label>
                <input class="calculation-content" type="text">
            </div>

            <div class="table-row">
                <label class="calculation-label">Имя</label>
                <input class="calculation-content" type="text">
            </div>

            <div class="table-row">
                <label class="calculation-label">Отчество</label>
                <input class="calculation-content" type="text">
            </div>

            <div class="table-row">
                <label class="calculation-label">Гражданство</label>
                <input class="calculation-content" type="text">
            </div>

            <div class="table-row">
                <label class="calculation-label">Дата рождения</label>
                <input class="calculation-content" type="text" placeholder="__.__.____">
            </div>

            <div class="table-row">
                <label class="calculation-label">Контактный телефон</label>
                <input class="calculation-content" type="text" placeholder="+7 (___) ___-__-__">
            </div>

            <div class="table-row">
                <label class="calculation-label">E-mail</label>
                <input class="calculation-content" type="text">
            </div>

            <div class="table-row">
                <label class="calculation-label">ИНН</label>
                <input class="calculation-content" type="text">
            </div>

        </div>

        <hr class="calculation-divider">

        <div class="table calculation">

            <div class="table-row fix">
                <label class="calculation-label">ПАСПОРТНЫЕ ДАННЫЕ</label>
            </div>

            <div class="table-row">
                <label class="calculation-label">Паспорт</label>
                <div class="flex-row">
                    <input class="calculation-content document-serial" type="text" placeholder="Серия"
                           maxlength="4">
                    <input class="calculation-content document-number" type="text" placeholder="Номер"
                           maxlength="6">
                </div>
            </div>

            <div class="table-row">
                <label class="calculation-label"></label>
                <input class="calculation-content" type="text" placeholder="Выдан">
            </div>

            <div class="table-row">
                <label class="calculation-label"></label>
                <input class="calculation-content" type="text" placeholder="Дата выдачи">
            </div>

            <div class="table-row">
                <label class="calculation-label"></label>
                <input class="calculation-content" type="text" placeholder="Код подразделения">
            </div>


            <div class="table-row">
                <label class="calculation-label">Адрес постоянной регистрации</label>
                <input class="calculation-content" type="text" placeholder="Регион / район">
            </div>

            <div class="table-row">
                <label class="calculation-label"></label>
                <input class="calculation-content" type="text" placeholder="Город / н.п.">
            </div>

            <div class="table-row">
                <label class="calculation-label"></label>
                <input class="calculation-content" type="text" placeholder="Улица">
            </div>

            <div class="table-row">
                <label class="calculation-label"></label>
                <div class="flex-row">
                    <input class="calculation-content address-number" type="text" placeholder="Дом">
                    <input class="calculation-content address-number" type="text" placeholder="Корпус">
                    <input class="calculation-content address-number" type="text" placeholder="Квартира">
                </div>

            </div>


        </div>

    </div>

</form>