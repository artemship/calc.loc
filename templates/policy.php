<!DOCTYPE html>
<html lang="en">
<head>
    <title>Печать</title>
    <!-- подключаем jquery -->
    <!--    <script type="text/javascript" src="js/jquery.js"></script>-->
    <!--    <script type="text/javascript" src="js/tab.js"></script>-->
    <!--    <script type="text/javascript" src="js/selectMark.js"></script>-->
    <!--    <script type="text/javascript" src="js/liveSearch.js"></script>-->
    <!--    <script type="text/javascript" src="js/bootstrap-formhelpers-phone.js"></script>-->


    <!--    <link rel="stylesheet" href="css/policy.css" type="text/css"/>-->

    <style type="text/css">
        body {
            margin: 0;
        }

        @media print {
            @page {
                padding: 0;
                margin: 0;
            }
        }

        p {
            margin: 0;
        }

        input[type='radio'] {
            margin: 0 3px 0 5px;
        }

        .radio {
            margin-right: 18px;
        }

        .checkbox {
            margin-right: 36px;
            font-size: 15px;
        }

        .cell {
            border-width: 1px;
            border-color: #C0C0C0;
            border-style: solid;
            padding: 2px 2px 0;
            font-family: Arial;
        }

        .center {
            text-align: center;
            justify-content: center;
        }

        .right {
            text-align: right;
            justify-content: flex-end;
        }

        #tel {
            padding-left: 598.5px;
            padding-top: 133px;
            font-family: Arial;
            font-size: 13.5px;
            font-weight: 600;
        }

        #ktc {
            padding-left: 271.5px;
            padding-top: 7px;
            font-family: Arial;
            font-size: 16.47px;
            font-weight: 600;
        }

        #table {
            margin: 44px 73px 0 55px;
            /*height: 1406px;*/
            border-width: 1px;
            border-color: #C0C0C0;
            border-style: solid;
        }

        #title {
            text-align: center;
            font-size: 10.8px;
            padding: 10px 0 5px;
        }

        .flex {
            display: flex;
            align-items: center; /*Центрирование по вертикали */
        }

        .flex-row {
            display: flex;
            flex-direction: row;
        }

        .flex-column {
            display: flex;
            flex-direction: column;
        }

        .caption-gray {
            font-size: 13.5px;
            font-weight: 600;
            background: #E0E0E0;
            display: flex;
            /*justify-content: center; !*Центрирование по горизонтали*!*/
            align-items: center; /*Центрирование по вертикали */
        }

        .caption-blue {
            font-size: 12.31px;
            background: #DAE9F6;
            display: flex;
            align-items: center; /*Центрирование по вертикали */
        }

        .caption-blue-bold {
            font-size: 12.31px;
            font-weight: 600;
            background: #DAE9F6;
            display: flex;
            align-items: center; /*Центрирование по вертикали */
        }

        .caption-yellow-bold {
            font-size: 12.31px;
            font-weight: 600;
            font-style: italic;
            background: #FFDF79;
            display: flex;
            align-items: center; /*Центрирование по вертикали */
        }

        .signature {
            color: #808080;
        }

        .section {
            font-size: 13.5px;
            font-weight: 600;
            background: #B0B0B0;
        }

        .value {
            font-size: 13.5px;
            font-weight: 600;
        }

        .value-fs9 {
            font-size: 12.31px;
            font-weight: 600;
        }

        .last {
            flex: 1;
        }

        #page {
            /*background-image: url("../img/zamzar.png");*/
            /*width: 970px;*/
            /*height: 1604px;*/
            /*width: 1051px;*/
            /*height: 1345px;*/
            width: 1189px;
            height: 1682px;
            vertical-align: middle;
            /*background-size: 926px 1310px;*/
            background-size: 1170px 1655px;
            /*background-size: cover;*/
            image-rendering: high-quality;
        }

        .border-left-none {
            border-left: 0;
        }

        .border-right-none {
            border-right: 0;
        }

        .border-top-none {
            border-top: 0;
        }

        .border-bottom-none {
            border-bottom: 0;
        }

        .fs7 {
            font-size: 9.45px;
        }

        .fs8 {
            font-size: 10.8px;
        }

        .fs9 {
            font-size: 12.31px;
        }

        .fs10 {
            font-size: 13.5px;
        }

        .w1 {
            width: 100px;
        }

        .w17 {
            width: 17px;
        }

        .w26 {
            width: 26px;
        }

        .w29 {
            width: 29px;
        }

        .w37 {
            width: 37px;
        }

        .w66 {
            width: 66px;
        }

        .w71 {
            width: 71px;
        }

        .w75 {
            width: 75px;
        }

        .w87 {
            width: 87px;
        }

        .w98 {
            width: 98px;
        }

        .w105 {
            width: 105px;
        }

        .w108 {
            width: 108px;
        }

        .w110 {
            width: 110px;
        }

        .w111 {
            width: 111px;
        }

        .w115 {
            width: 115px;
        }

        .w125 {
            width: 125px;
        }

        .w126 {
            width: 126px;
        }

        .w128 {
            width: 128px;
        }

        .w133 {
            width: 133px;
        }

        .w141 {
            width: 141px;
        }

        .w143 {
            width: 143px;
        }

        .w183 {
            width: 183px;
        }

        .w194 {
            width: 194px;
        }

        .w195 {
            width: 195px;
        }

        .w211 {
            width: 211px;
        }

        .w226 {
            width: 226px;
        }

        .w256 {
            width: 256px;
        }

        .w264 {
            width: 264px;
        }

        .w272 {
            width: 272px;
        }

        .w310 {
            width: 310px;
        }

        .w333 {
            width: 333px;
        }

        .w334 {
            width: 334px;
        }

        .w372 {
            width: 372px;
        }

        .w403 {
            width: 403px;
        }

        .w420 {
            width: 420px;
        }

        .w462 {
            width: 462px;
        }

        .w516 {
            width: 516px;
        }

        .w517 {
            width: 517px;
        }

        .w534 {
            width: 534px;
        }

        .w650 {
            width: 650px;
        }

        .w838 {
            width: 838px;
        }

    </style>

</head>
<body>
<?php //echo file_get_contents(__DIR__ . '/../svg/1.svg'); ?>
<div id="page">
    <div id="tel">
        телефон для связи: 8 495 744-78-31
    </div>
    <div id="ktc">
        ПОЛИС КОМПЛЕКСНОГО СТРАХОВАНИЯ ТРАНСПОРТНОГО СРЕДСТВА (КТС)
    </div>
    <div id="table">
        <div id="title" class="cell">
            ООО РСО «ЕВРОИНС» (далее - Страховщик) и Страхователь заключили настоящий Полис (Договор) на основании
            «Правил страхования автотранспортных средств», действующих на момент заключения Договора (далее – Правила 1)
            и «Правил страхования от несчастных случаев и болезней» действующих на момент заключения Договора (далее –
            Правила 2) , Дополнительных условий (находящихся на обороте Полиса) и устного заявления Страхователя. По
            настоящему договору страхования (Полису) Страховщик обязуется за обусловленную договором плату (страховую
            премию) возместить Страхователю или иному лицу, в пользу которого заключен Полис (Выгодоприобретателю) в
            пределах определенных Полисом страховых сумм убытки, причиненные в результате наступления предусмотренного
            Полисом события (страхового случая).
        </div>

        <div class="flex-row">
            <div class="cell caption-gray w334">
                СТРАХОВЩИК
            </div>
            <div class="cell value center last">
                ООО РСО «ЕВРОИНС»
            </div>
        </div>

        <div class="flex-row">
            <div class="cell caption-gray  w195">
                СРОК ДЕЙСТВИЯ ДОГОВОРА
            </div>
            <div class="flex-column">
                <div class="flex-row">
                    <div class="cell caption-blue center fs10 w17">
                        с
                    </div>
                    <div class="cell value center w29">
                        9
                    </div>
                    <div class="cell caption-blue center fs10 w17">
                        ч.
                    </div>
                    <div class="cell value center w29">
                        54
                    </div>
                    <div class="cell caption-blue center fs10 w17">
                        м.
                    </div>
                    <div class="cell value center w194">
                        31.03.2020
                    </div>
                </div>
                <div class="flex-row">
                    <div class="cell caption-blue center fs10 w17">
                        с
                    </div>
                    <div class="cell value center w29">
                        9
                    </div>
                    <div class="cell caption-blue center fs10 w17">
                        ч.
                    </div>
                    <div class="cell value center w29">
                        54
                    </div>
                    <div class="cell caption-blue center fs10 w17">
                        м.
                    </div>
                    <div class="cell value center w194">
                        30.03.2021
                    </div>
                </div>
            </div>
            <div class="cell caption-blue last">
                Но не ранее подписания сторонами акта осмотра ТС, если осмотр производился.
            </div>
        </div>

        <div class="flex-row">
            <div class="cell caption-gray w195">
                ПРИЗНАК ДОГОВОРА
            </div>
            <div class="cell caption-blue fs10 w333">
                <input type="radio">
                <p class="radio">Первоначальный</p>
                <input type="radio">
                <p>Переход из другой СК</p>
            </div>

            <div class="flex-column last">
                <div class="flex-row">
                    <div class="cell caption-blue w226">
                        Предыдущий договор:
                        <div style="margin-left: 64px;">серия</div>
                    </div>
                    <div class="cell value center w87">
                        1111
                    </div>
                    <div class="cell caption-blue center w37">
                        номер
                    </div>
                    <div class="cell value center last">
                        2222
                    </div>
                </div>
                <div class="flex-row">
                    <div class="cell caption-blue w226">
                        Наименование предыдущей СК:
                    </div>
                    <div class="cell value center last">
                        ООО "РОМАШКА"
                    </div>
                </div>

            </div>

        </div>


        <div class="cell section">
            1. СТРАХОВАТЕЛЬ
        </div>

        <div class="flex-row">
            <div class="cell caption-blue w334">
                ФИО / наименование организации
            </div>
            <div class="cell value last">Иван</div>
        </div>

        <div class="flex-row">
            <div class="cell caption-blue w334">
                Регион
            </div>
            <div class="cell value last">Ленинградская область</div>
        </div>

        <div class="flex-row">
            <div class="cell caption-blue w334">
                Адрес регистрации
            </div>
            <div class="cell value last">г. Санкт-Петербург</div>
        </div>

        <div class="flex-row">
            <div class="cell caption-blue w334">
                Паспорт / в. билет (св-во о регистр. ЮЛ). Серия/номер документа, когда и кем выдан, код подразделения
            </div>
            <div class="cell value last">4522 321654</div>
        </div>

        <div class="flex-row">
            <div class="cell caption-blue w334">
                Гражданство
            </div>
            <div class="cell value w310">
                РФ
            </div>
            <div class="cell caption-blue center w110">
                Дата рождения
            </div>
            <div class="cell value last">
                11.10.1990
            </div>
        </div>

        <div class="flex-row">
            <div class="cell caption-blue w334">
                Контактные телефоны
            </div>
            <div class="cell value last">+790151002233</div>
        </div>

        <div class="flex-row">
            <div class="cell caption-blue w334">
                Адрес электронной почты / email
            </div>
            <div class="cell value w310">
                mail@yandex.ru
            </div>
            <div class="cell caption-blue center w110">
                ИНН
            </div>
            <div class="cell value last">
                502706401358
            </div>
        </div>


        <div class="cell section">
            2. ВЫГОДОПРИОБРЕТАТЕЛЬ / ЛИЦО, УПОЛНОМОЧЕННОЕ НА ПОЛУЧЕНИЕ СТРАХОВОГО ВОЗМЕЩЕНИЯ
        </div>

        <div class="flex-row">
            <div class="cell caption-blue w334">
                ФИО / наименование организации
            </div>
            <div class="cell value center last">Иванов Иван Иванович</div>
        </div>


        <div class="cell section">
            3. СВЕДЕНИЯ О ТРАНСПОРТНОМ СРЕДСТВЕ
        </div>

        <div class="flex-row">
            <div class="cell caption-blue w195">
                Марка:
            </div>
            <div class="cell value w333">
                <?= $mark ?>
            </div>
            <div class="cell caption-blue w226">
                Модель:
            </div>
            <div class="cell value last">
                <?= $model ?>
            </div>
        </div>

        <div class="flex-row">
            <div class="cell caption-blue w195">
                Год изготовления:
            </div>
            <div class="cell value w333">
                <?= $carAge ?>
            </div>
            <div class="cell caption-blue w226">
                Гос. рег. знак:
            </div>
            <div class="cell value last">
                <?= $autoNumber ?>
            </div>
        </div>

        <div class="flex-row">
            <div class="cell caption-blue w195">
                Мощность двигателя, л.с.:
            </div>
            <div class="cell value w333">
                <?= $enginePower ?>
            </div>
            <div class="cell caption-blue w226">
                Объем двигателя, см3:
            </div>
            <div class="cell value last">
                <?= $engineVolume ?>
            </div>
        </div>

        <div class="flex-row">
            <div class="cell caption-blue w195">
                Идентификационный номер VIN:
            </div>
            <div class="cell value w333">
                <?= $vinId ?>
            </div>
            <div class="cell caption-blue w226">
                Кол-во ключей замка зажигания:
            </div>
            <div class="cell value last">
                <?= $keysAmount ?>
            </div>
        </div>

        <div class="flex-row">
            <div class="cell caption-blue w195">
                Категория ТС:
            </div>
            <div class="cell value w333">
                <?= $vehicleCategory ?>
            </div>
            <div class="cell caption-blue w226">
                Разрешенная максимальная масса, кг:
            </div>
            <div class="cell value last">
                <?= $permissibleMaxWeight ?>
            </div>
        </div>

        <div class="flex-row">
            <div class="cell caption-blue w195">
                Серия и № ПТС / ПСМ:
            </div>
            <div class="cell value w333">
                <?= $ptsSerialNumber ?>
            </div>
            <div class="cell caption-blue w226">
                Серия и № СТС:
            </div>
            <div class="cell value last">
                <?= $stsSerialNumber ?>
            </div>
        </div>


        <div class="cell section">
            4. ЛИЦА, ДОПУЩЕННЫЕ К УПРАВЛЕНИЮ ТРАНСПОРТНЫМ СРЕДСТВОМ НА ЗАКОННЫХ ОСНОВАНИЯХ
        </div>

        <div class="cell flex">
            <input type="checkbox">
            <p class="checkbox fs9">список лиц</p>
            <input type="checkbox">
            <p class="fs9">без ограничений</p>
        </div>

        <div class="flex-row">
            <div class="cell caption-blue center w534">
                ФИО / лица в соответсвии со следующими характеристиками:
            </div>
            <div class="cell caption-blue center w110">
                Дата рождения
            </div>
            <div class="cell caption-blue center w110">
                Стаж вождения с
            </div>
            <div class="cell caption-blue center last">
                Водительское удостоверение
            </div>
        </div>

        <div class="flex-row">
            <div class="cell value">
                1.
            </div>
            <div class="cell value w517">
                Иванов Иван Иванович
            </div>
            <div class="cell value w110">
                11.11.1980
            </div>
            <div class="cell value w110">
                01.01.2010
            </div>
            <div class="cell value last">
                111111111
            </div>
        </div>

        <div class="flex-row">
            <div class="cell value">
                2.
            </div>
            <div class="cell value w517">
                ************
            </div>
            <div class="cell value w110">
                *****
            </div>
            <div class="cell value w110">
                *****
            </div>
            <div class="cell value last">
                *** ***
            </div>
        </div>

        <div class="flex-row">
            <div class="cell value">
                3.
            </div>
            <div class="cell value w517">
                ************
            </div>
            <div class="cell value w110">
                *****
            </div>
            <div class="cell value w110">
                *****
            </div>
            <div class="cell value last">
                *** ***
            </div>
        </div>

        <div class="flex-row">
            <div class="cell value">
                4.
            </div>
            <div class="cell value w517">
                ************
            </div>
            <div class="cell value w110">
                *****
            </div>
            <div class="cell value w110">
                *****
            </div>
            <div class="cell value last">
                *** ***
            </div>
        </div>


        <div class="flex-row">
            <div class="cell section w838">
                5. СТРАХОВОЕ ПОКРЫТИЕ
            </div>
            <div class="cell section last">
                Валюта договора: RUR
            </div>
        </div>

        <div class="flex-row">
            <div class="cell caption-blue w272">
                Действительная стоимость ТС
            </div>
            <div class="cell value center w256">
                300 000,00
            </div>
            <div class="cell caption-blue w183">
                Коэфф. пропорциональности =
            </div>
            <div class="cell value center w37">
                1,00
            </div>
            <div class="cell caption-blue last"></div>
        </div>

        <div class="flex-row">
            <div class="cell caption-blue-bold center w272">
                Страховые риски
            </div>
            <div class="cell caption-blue-bold center w125">
                Страховая сумма
            </div>
            <div class="cell caption-blue-bold center w125">
                Вид страховой суммы
            </div>
            <div class="cell caption-blue-bold center w110">
                Страховой тариф
            </div>
            <div class="cell caption-blue-bold center w110">
                Страховая премия
            </div>
            <div class="flex-column last">
                <div class="cell caption-blue-bold center">
                    Франшиза дополнительно к п. 5 Правил
                </div>
                <div class="flex-row">
                    <div class="cell caption-blue-bold center w141">
                        Безусловная
                    </div>
                    <div class="cell caption-blue-bold center last">
                        Динамическая
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-row">
            <div class="cell caption-blue-bold w195">
                ТС (Ущерб + Хищение):
            </div>
            <div class="cell caption-blue-bold center w71">
                Правила 1
            </div>
            <div class="cell caption-blue-bold center w125">
                1 500 000,00
            </div>
            <div class="cell caption-blue-bold center w125">
                Агрегатная
            </div>
            <div class="cell caption-blue-bold center w110">
                25,25%
            </div>
            <div class="cell caption-blue-bold center w110">
                48 000,00
            </div>
            <div class="cell value-fs9 center w141">
                7%
            </div>
            <div class="cell value-fs9 center last">
                нет
            </div>
        </div>

        <div class="flex-row">
            <div class="cell caption-blue-bold w195">
                ДО (Ущерб + Хищение):
            </div>
            <div class="cell caption-blue-bold center w71">
                Правила 1
            </div>
            <div class="cell caption-blue-bold center w125">
                -
            </div>
            <div class="cell caption-blue-bold center w125">
                Агрегатная
            </div>
            <div class="cell caption-blue-bold center w110">
                -
            </div>
            <div class="cell caption-blue-bold center w110">
                -
            </div>
            <div class="cell value-fs9 center w141">
                -
            </div>
            <div class="cell value-fs9 center last">
                нет
            </div>
        </div>

        <div class="flex-row">
            <div class="cell caption-blue-bold w195">
                Несчастный случай:
            </div>
            <div class="cell caption-blue-bold center w71">
                Правила 2
            </div>
            <div class="cell caption-blue-bold center w125">
                700 000,00
            </div>
            <div class="cell caption-blue-bold center w125">
                Агрегатная
            </div>
            <div class="cell caption-blue-bold center w110">
                -
            </div>
            <div class="cell caption-blue-bold center w110">
                70 000,00
            </div>
            <div class="cell caption-yellow-bold center w141">
                Номер квитанции
            </div>
            <div class="cell value-fs9 center last"></div>
        </div>

        <div class="flex-row">
            <div class="cell caption-blue-bold w272"></div>
            <div class="cell caption-blue-bold center w372">
                ИТОГО страховая премия по договору:
            </div>
            <div class="cell caption-blue-bold center w110">
                118 000,00
            </div>
            <div class="cell caption-blue-bold last"></div>
        </div>


        <div class="cell section">
            6. СРОК И ПОРЯДОК ОПЛАТЫ СТРАХОВОЙ ПРЕМИИ
        </div>

        <div class="flex-row">
            <div class="cell caption-blue w272">
                1-й страховой взнос в размере
            </div>
            <div class="cell value center w256">
                118 000,00
            </div>
            <div class="cell caption-blue center w110">
                оплатить до
            </div>
            <div class="cell value center w110">
                02.04.2020
            </div>
            <div class="cell caption-blue center w141">
                Курс ЦБ РФ
            </div>
            <div class="cell value center last">
                78,22
            </div>
        </div>

        <div class="flex-row">
            <div class="cell caption-blue w272">
                2-й страховой взнос в размере
            </div>
            <div class="cell value center w256">

            </div>
            <div class="cell caption-blue center w110">
                оплатить до
            </div>
            <div class="cell value center w110">

            </div>
            <div class="cell caption-blue center w141">
                Курс ЦБ РФ
            </div>
            <div class="cell value center last">

            </div>
        </div>

        <div class="flex-row">
            <div class="cell caption-blue w272">
                3-й страховой взнос в размере
            </div>
            <div class="cell value center w256">

            </div>
            <div class="cell caption-blue center w110">
                оплатить до
            </div>
            <div class="cell value center w110">

            </div>
            <div class="cell caption-blue center w141">
                Курс ЦБ РФ
            </div>
            <div class="cell value center last">

            </div>
        </div>


        <div class="cell section">
            7. ДОПОЛНИТЕЛЬНЫЕ УСЛОВИЯ "СП "АВТОСАЛОНЫ"
        </div>

        <div class="cell fs7 border-bottom-none">
            1. Отсутствует выплата без справок (один стеклянный элемент). Пункт 10.2.7.5.1. Правил 1 не применяется.
        </div>

        <div class="cell fs7 border-top-none border-bottom-none">
            2. Отсутствует выплата без справок (один кузовной элемент). Пункт 10.2.7.5.2. Правил 1 не применяется.
        </div>

        <div class="cell fs7 border-top-none">
            Выгодоприобретателем по рискам "Ущерб" (в случае полной гибели ТС) и "Хищение" является АО КБ «РУСНАРБАНК»,
            ИНН 7744002211, КС 30101810145250000466, БИК 044525466, адрес: Российская Федерация, 115184, город Москва,
            Озерковский переулок, дом 3, в размере неисполненных обязательств Собственника транспортного средства перед
            Банком по Кредитному договору, существующих на момент выплаты страхового возмещения, а в оставшейся части
            страхового возмещения Выгодоприобретатель-Собственник.
        </div>

        <div class="flex-row">
            <div class="cell caption-blue w211">
                Цели использования ТС:
            </div>
            <div class="cell caption-blue">
                X
            </div>
            <div class="cell caption-blue">
                личная
            </div>
            <div class="cell caption-blue center last">
                тс не сдается в аренду и не используется в качестве такси
            </div>
        </div>

        <div class="flex-row">
            <div class="cell caption-blue border-right-none">
                дополнительное оборудование застраховано согласно:
            </div>
            <div class="cell caption-blue border-left-none">
                <input type="checkbox">
                <p class="checkbox fs9">спецификации</p>
                <input type="checkbox">
                <p class="fs9">дополнительному соглашению от</p>
            </div>
            <div class="cell value center flex w87">
                01.03.2020
            </div>
            <div class="cell caption-blue last"></div>
        </div>

        <div class="cell caption-blue fs7">
            Лимит ответственности Страховщика по риску Ущерб, устанавливается в размере не более 40% от страховой суммы
            по каждому страховому случаю, за исключением полной фактической или конструктивной гибели.
        </div>


        <div class="cell section">
            8. ПОРЯДОК ВЫПЛАТЫ СТРАХОВОГО ВОЗМЕЩЕНИЯ ПО РИСКУ "УЩЕРБ"
        </div>

        <div class="cell caption-blue border-bottom-none fs7">
            Направление на универсальную СТОА по выбору Страховщика. Договором страхования установлено, при наступлении
            второго и последующих страховых случаев, произошедших в течение одного года действия договора страхования,
            устанавливается динамическая франшиза в размере 10% от страховой суммы по каждому страховому случаю. При
            выплате страхового возмещения по рискам «Ущерб» и «Хищение» значение динамической франшизы и безусловной
            франшизы суммируется. По риску «Хищение», применяется безусловная франшиза в размере 95 (девяносто пять)
            процентов от страховой суммы, действующая на дату наступления страхового случая, в случае угона (хищения)
            застрахованного ТС, при условии, что вместе с ТС либо в течение пяти суток предшествующий хищению или угону
            ТС, а также после угона или хищения ТС похищено (утеряно) или не может быть передано Страховщику
            Страхователем что либо из перечисленных ниже оригиналов документов или предметов, относящихся к
            застрахованному ТС: паспорт транспортного средства; свидетельство о регистрации транспортного средства; ключ
            от ТС; управляющий элемент противоугонной системы.
        </div>

        <div class="cell caption-blue border-top-none">
            <input type="checkbox">
            <p class="fs7">Страхователь (выгодоприобретатель) согласен на доплату разницы между стоимостью возмещения
                вреда в натуре
                и суммой страхового возмещения при наступлении страхового случая.</p>
        </div>


        <div class="cell section">
            9. РЕЗУЛЬТАТЫ ОСМОТРА ТРАНСПОРТНОГО СРЕДСТВА
        </div>

        <div class="flex-row">
            <div class="cell caption-blue w115">
                <input type="radio">
                <p>Акт осмотра от</p>
            </div>
            <div class="cell value center w143">
                22.02.2020
            </div>
            <div class="cell caption-blue last"></div>
        </div>

        <div class="flex-row">
            <div class="cell caption-gray center w534">
                СТРАХОВАТЕЛЬ
            </div>
            <div class="cell caption-gray center last">
                ПРЕДСТАВИТЕЛЬ СТРАХОВЩИКА
            </div>
        </div>

        <div class="cell fs7">
            Страхователь, заключая договор страхования на основании Правил страхования и в соответствии с Федеральным
            законом от 27.07.2006г. № 152-ФЗ "О персональных данных", подтверждает свое согласие на обработку своих
            персональных данных Страховщиком и уполномоченными им третьими лицами сведений, указанных в настоящем
            Полисе, установленными законом способами, в т.ч. включение персональных данных в клиентскую базу
            Страховщика, в целях информирования о новинках страховых продуктов, услуг, осуществления Страховщиком прямых
            контактов со Страхователем с помощью средств связи (посредством направления уведомления с применением
            СМС-сообщений, электронной почты и иными доступными способами). Настоящее согласие может быть отозвано
            Страхователем посредством направления Страховщику соответствующего письменного заявления.
        </div>

        <div class="flex-row">
            <div class="cell signature center fs9 w264">
                подпись
            </div>
            <div class="cell value center w264">
                Иван
            </div>
            <div class="cell center fs9 last"></div>
        </div>

        <div class="flex-row">
            <div class="cell caption-blue fs7 w534">
                Действуя от своего имени и в своем интересе как Страхователь, подтверждаю, что надлежащим образом
                ознакомлен и согласен с условиями настоящего Полиса и условиями «Правил страхования автотранспортных
                средств», «Правил страхования от несчастных случаев и болезней» ООО РСО «ЕВРОИНС». Адрес нахождения
                Правил в Интернете: https://www.euro-ins.ru/o_kompanii/regulations/ Все пункты и условия настоящего
                Полиса и Правил страхования мне (Страхователю) разъяснены и понятны, обязуюсь их исполнять.
            </div>
            <div class="cell flex center fs9 w133">
                По Доверенности №
            </div>
            <div class="cell flex center fs9 w87">

            </div>
            <div class="cell flex center fs9 w37">
                от
            </div>
            <div class="cell flex center fs9 w98">
                22.02.2020
            </div>
            <div class="cell flex center fs9 last">

            </div>
        </div>

        <div class="flex-row">
            <div class="cell signature center fs9 w264">
                подпись
            </div>
            <div class="cell value center w264">
                Иван
            </div>
            <div class="cell signature center fs9 w226">
                подпись
            </div>
            <div class="cell value center fs9 last"></div>
        </div>

        <div class="flex-row">
            <div class="cell caption-blue right w462">
                ВРЕМЯ
            </div>
            <div class="cell value center w66">
                22:22
            </div>
            <div class="cell caption-blue right w420">
                ДАТА ВЫДАЧИ ПОЛИСА
            </div>
            <div class="cell value center last">
                22.02.2020
            </div>
        </div>


    </div>
</div>

</body>