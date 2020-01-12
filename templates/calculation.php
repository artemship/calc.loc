<div class="container-new">
<div id="tabs">
        <div class="tab whiteborder">Расчет комиссии</div>
        <div class="tab">Личные данные</div>
        <div class="tab">Днные автомобиля</div>
        <div class="tabContent">


        <div class="container-tab1">


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
        <label for="exampleFormControlSelect1">Франшиза</label>
        <select class="form-control" id="js-select-franchise" onchange="nulltariff()">
            <?php if (!empty($franchises)):
                foreach ($franchises as $franchise): ?>
                    <option value="<?= $franchise; ?>"><?= $franchise . ' %' ?></option>
                <? endforeach;
            endif ?>
        </select>
    </div>
</div>

<div class="row">
    <div class="col-6 form-group label-font">
        <label for="exampleFormControlSelect1">Модель</label>
        <select class="form-control" id="js-select-model" onchange="nulltariff()" disabled>
            <option value="0">--Выбрать модель--</option>
        </select>
        <!--                <span class="model"></span>-->
    </div>
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
</div>

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
        <label for="exampleFormControlSelect1"><b>Страховая сумма</b></label>
        <input class="form-control" type="text" id="js-insurance-sum" placeholder="Страховая сумма"
               value="1100000">
    </div>
</div>

<div class="row">
    <div class="col-6 form-group label-font">
        <label for="exampleFormControlSelect1">Страховой риск</label>
        <select class="form-control " id="js-select-insurance" maxlength="30" onchange="nulltariff()">
            <?php if (!empty($insurances)):
                foreach ($insurances as $key => $insurance): ?>
                    <option value="<?= $key; ?>"><?= $insurance ?></option>
                <? endforeach;
            endif ?>
        </select>
    </div>

                                  

    <div class="col-6 form-group label-font">
        <label for="exampleFormControlSelect1">Возраст водителя</label>
        <input class="form-control form-control-2" maxlength="30 type="text" id="js-age" placeholder="Возраст водителя"
               onchange="nulltariff()">
        <p class="alert-danger" id="error_v"></p>
    </div>
</div>

<div class="row">
    <div class="col-6 form-group label-font">
        <label for="exampleFormControlSelect1">Срок страхования</label>
        <select class="form-control " id="js-select-period">
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
    <div class="col-6 form-group label-font">
        <label for="exampleFormControlSelect1">Стаж</label>
        <input class="form-control" type="text" id="js-experience" placeholder="Стаж"
               onchange="nulltariff()">
        <p class="alert-danger" id="error_s"></p>
    </div>
</div>

<div class="container-new">
<div class="row">
        <div class="col-12 custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" value="" id="customCheck1" checked>
            <label class="custom-control-label" for="customCheck1">
                ТС находится на гарантии производителя
            </label>
        </div>

        <div class="col-12 custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" value="" id="customCheck2" checked>
            <label class="custom-control-label" for="customCheck2">
                Отсутствует выплата без справок из компетентных органов (один стеклянный элемент)
            </label>
        </div>

        <div class="col-12 custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" value="" id="customCheck3" checked>
            <label class="custom-control-label" for="customCheck3">
                Отсутствует выплата без справок из компетентных органов (один кузовной элемент)
            </label>
        </div>

        <div class="col-12 custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" value="" id="customCheck4" checked>
            <label class="custom-control-label" for="customCheck4">
                Агрегатная
            </label>
        </div>
</div>
</div>

<div class="container-new">
    <div class="col-6 form-group">
        <label for="exampleFormControlSelect1"><b>Тариф</b></label>
        <input class="form-control" type="text" id="tariff" disabled>
    </div>

    <div class=" col-12 ">
        <button type="button" class="btn btn-secondary" id="js-btn-submit">Рассчитать</button>
    </div>

</div> 
</div>
</div>








        <div class="tabContent">




        <div class="container-tab2">
    <div class="row">

        <div class="col-5 form-group">                        
            <label for="exampleFormControlSelect1">ФИО</label>
            <input class="form-control" type="text" placeholder="ФИО">
        </div>
        <div class="col-3 form-group">
            <label for="exampleFormControlSelect1">Дата рождения</label>
            <input class="form-control" type="date" placeholder="Дата рождения">
        </div>
        <div class="col-4 form-group">
            <label for="exampleFormControlSelect1">Телефон</label>
            <input type="tel" name="phone" id="phone" class="form-control bfh-phone" data-format="+7 (ddd) ddd-dd-dd" value="" pattern="(\+[\d\ \(\)\-]{16})">
          
        </div> 

    </div>   
    
    <div class="row">
        <div class="col-6 form-group">                            
            <label for="exampleFormControlSelect1">Адрес регистрации</label>
            <input class="form-control" type="text" placeholder="Адрес регистрации">
        </div>
        <div class="col-3 form-group">
            <label for="exampleFormControlSelect1">Регион</label>
            <input class="form-control" type="text" placeholder="Регион">
        </div>
        <div class="col-3 form-group">
            <label for="exampleFormControlSelect1">Гражданство</label>
            <input class="form-control" type="text" placeholder="Гражданство">
        </div> 
    </div>  
        
    <div class="row">    
        <div class="col-4 form-group">

            <label for="exampleFormControlSelect1">Паспорт</label>
            <input class="form-control num" type="text" id="num" placeholder="Паспорт">
        </div>
        <div class="col-4 form-group">
            <label for="exampleFormControlSelect1">ИНН</label>
            <input class="form-control num" type="text" id="num" placeholder="ИНН">
        </div>
        <div class="col-4 form-group">
            <label for="exampleFormControlSelect1">Почта</label>
            <input class="form-control" type="text" id="js-age" placeholder="Почта">
        </div> 
    </div>         

 </div>


        </div>
        <div class="tabContent">







        <div class="container-tab3">
  
  
        
        

    <div class="row">                           
        <div class="col-3 form-group">

            <label for="exampleFormControlSelect1">Марка</label>
            <input class="form-control" type="text" id="js-age" placeholder="Марка" disabled>
        </div>
        <div class="col-3 form-group">
            <label for="exampleFormControlSelect1">Модель</label>
            <input class="form-control" type="text" id="js-age" placeholder="Модель" disabled>
        </div>
        <div class="col-3 form-group">
            <label for="exampleFormControlSelect1">Год изготовления</label>
            <input class="form-control" type="text" id="js-age" placeholder="Год изготовления" disabled>
        
        </div> 

        <div class="col-3 form-group">

            <label for="exampleFormControlSelect1">Категория ТС</label>
            <input class="form-control" type="text" id="js-age" placeholder="Категория ТС">
        </div>
    </div>      
        
    <div class="row">    

        <div class="col-4 form-group">
            <label for="exampleFormControlSelect1">Мощность двигателя, л.с.</label>
            <input class="form-control" type="text" id="js-age" placeholder="Мощность двигателя, л.с.">
        </div>
        <div class="col-4 form-group">
            <label for="exampleFormControlSelect1">Объем двигателя, см3</label>
            <input class="form-control" type="text" id="js-age" placeholder="Объем двигателя, см3">

        </div> 
    </div>    
        
    <div class="row">    
        <div class="col-4 form-group">

            <label for="exampleFormControlSelect1">Идентификационный номер VIN</label>
            <input class="form-control" type="text" id="js-age" placeholder="Идент. номер VIN">
        </div>
        <div class="col-4 form-group">
            <label for="exampleFormControlSelect1">Количество ключей замка зажигания</label>
            <input class="form-control" type="text" id="js-age" placeholder="Кол-во ключей замка зажиг.">
        </div>
        <div class="col-4 form-group">
            <label for="exampleFormControlSelect1">Государственный регистрационный знак</label>
            <input class="form-control" type="text" id="js-age" placeholder="Гос. рег. знак">
        </div>  
    </div>    

    <div class="row">    
        <div class="col-4 form-group">  

            <label for="exampleFormControlSelect1">Разрешенная макс. масса, кг</label>
            <input class="form-control" type="text" id="js-age" placeholder="Разрешенная макс. масса, кг">
        </div>
        <div class="col-4 form-group">
            <label for="exampleFormControlSelect1">Серия и ПТС/ПСМ</label>
            <input class="form-control" type="text" id="js-age" placeholder="Серия и ПТС/ПСМ">
        </div>
        <div class="col-4 form-group">
            <label for="exampleFormControlSelect1">Серия и СТС</label>
            <input class="form-control" type="text" id="js-age" placeholder="Серия и СТС">
        </div>    
    </div>
</div>
</div>

</div>

<script>
var tab; // заголовок вкладки
var tabContent; // блок содержащий контент вкладки


window.onload=function() {
    tabContent=document.getElementsByClassName('tabContent');
    tab=document.getElementsByClassName('tab');
    hideTabsContent(1);
}

document.getElementById('tabs').onclick= function (event) {
    var target=event.target;
    if (target.className=='tab') {
       for (var i=0; i<tab.length; i++) {
           if (target == tab[i]) {
               showTabsContent(i);
               break;
           }
       }
    }
}

function hideTabsContent(a) {
    for (var i=a; i<tabContent.length; i++) {
        tabContent[i].classList.remove('show');
        tabContent[i].classList.add("hide");
        tab[i].classList.remove('whiteborder');
    }
}

function showTabsContent(b){
    if (tabContent[b].classList.contains('hide')) {
        hideTabsContent(0);
        tab[b].classList.add('whiteborder');
        tabContent[b].classList.remove('hide');
        tabContent[b].classList.add('show');
    }
}
</script>



