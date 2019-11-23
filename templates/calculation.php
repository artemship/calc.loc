<section id="form-parameter">

    <form>
        <div class="container">
            <div class="col-5 form-group">
                <label for="exampleFormControlSelect1">Марка</label>
                <select class="form-control" id="js-select-mark">
                    <option value="0">--Выбрать марку--</option>
                    <?php if (!empty($cars)):
                        foreach ($cars as $car): ?>
                            <option value="<?= $car->getMark(); ?>"><?= $car->getMark() ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div>

            <div class="col-5 form-group">
                <label for="exampleFormControlSelect1">Модель</label>
                <span class="model"></span>
            </div>

            <div class="col-5 form-group">
                <label for="exampleFormControlSelect1">Год выпуска</label>
                <select class="form-control " id="js-select-age-car">
                    <?php if (!empty($carsAge)):
                        foreach ($carsAge as $key => $carAge): ?>
                            <option value="<?= $key; ?>"><?= $carAge ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div>

            <div class="col-5 form-group">
                <label for="exampleFormControlSelect1">Страховой риск</label>
                <select class="form-control " id="js-select-insurance-risk">
                    <?php if (!empty($insuranceRisks)):
                        foreach ($insuranceRisks as $key => $insuranceRisk): ?>
                            <option value="<?= $key; ?>"><?= $insuranceRisk ?></option>
                        <? endforeach;
                    endif ?>
                </select>
            </div>

            <div class=" col-5 text-right ">
                <button type="button" class="btn btn-secondary" id="js-btn-submit">Продолжить</button>
            </div>

            <div class="col-5 form-group">
                <label for="exampleFormControlSelect1">Базовый тариф</label>
                <input type="text" id="base-tariff" disabled>
                <!--                <span class="base-tariff">-->
                <!--                    <input type="text" value="123" id="js-text">-->
                <!--                </span>-->
            </div>

        </div>
    </form>

</section>
