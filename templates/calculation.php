<section id="form-parameter">

    <form>
        <div class="container" >
            <div class="col-5 form-group" >
                <label for="exampleFormControlSelect1"><b>Марка</b></label>
                <select class="form-control" id="js-select-mark" onclick="nulltariff()">
                    <option value="0">--Выбрать марку--</option>
                    <?php if (!empty($cars)):
                        foreach ($cars as $car): ?>
                            <option value="<?= $car->getMark(); ?>"><?= $car->getMark() ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div>

            <div class="col-5 form-group">
                <label for="exampleFormControlSelect1"><b>Модель</b></label>
                <select class="form-control" id="js-select-model" onclick="nulltariff()" disabled>
                    <option value="0">--Выбрать модель--</option>
                </select>
<!--                <span class="model"></span>-->
            </div>

            <div class="col-5 form-group">
                <label for="exampleFormControlSelect1"><b>Год выпуска</b></label>
                <select class="form-control " id="js-select-car-age" onclick="nulltariff()">
                    <?php if (!empty($carsAge)):
                        foreach ($carsAge as $key => $carAge): ?>
                            <option value="<?= $key; ?>"><?= $carAge ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div>

            <div class="col-5 form-group">
                <label for="exampleFormControlSelect1"><b>Страховой риск</b></label>
                <select class="form-control " id="js-select-insurance" onclick="nulltariff()">
                    <?php if (!empty($insurances)):
                        foreach ($insurances as $key => $insurance): ?>
                            <option value="<?= $key; ?>"><?= $insurance ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div>

            <div class="col-5 form-group">
                <label for="exampleFormControlSelect1"><b>Франшиза</b></label>
                <select class="form-control" id="js-select-franchise" onclick="nulltariff()">
                    <?php if (!empty($franchises)):
                        foreach ($franchises as $franchise): ?>
                            <option value="<?= $franchise->getValue(); ?>"><?= $franchise->getValue() . ' %' ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div>

            <div class="col-5 form-group">
                <label for="exampleFormControlSelect1"><b>Возраст водителя</b></label>
                <input class="form-control" type="text" id="js-age" onclick="nulltariff()">

            </div>

            <div class="col-5 form-group">
                <label for="exampleFormControlSelect1"><b>Стаж</b></label>
                <input class="form-control" type="text" id="js-experience" onclick="nulltariff()">
            </div>

            <div class="col-5 form-group">
                <label for="exampleFormControlSelect1"><b>Тариф</b></label>
                <input class="form-control" type="text" id="tariff" disabled>
            </div>

            <div class=" col-5 text-right ">
                <button type="button" class="btn btn-secondary" id="js-btn-submit">Рассчитать</button>
            </div>

        </div>
    </form>
<script>
    function nulltariff()
    {
        document.getElementById("tariff").value=0;
    }
</script>
</section>
