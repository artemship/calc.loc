<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="www/style.css" type="text/css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>
        Тестовая страница
    </title>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/selectMark.js"></script>
</head>

<body>
<hr>
<section id="form-parameter">
    <form>
        <div class="container">
            <div class="col-5 form-group">
                <label for="exampleFormControlSelect1">Параметр 1</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class=" col-5 text-right ">
                <button type="button" class="btn btn-secondary ">Продолжить</button>
            </div>
        </div>
    </form>
</section>
</br>
</br>
<hr>
</br>
</br>
<section id="input">
    <div class="container">
        <form>
            <div class="form-row align-items-center">

                <div class="col-auto">

                    <div class="input-group mb-2">


                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user-check"></i></div>
                        </div>

                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Логин">
                    </div>
                </div>


                <div class="col-auto">

                    <div class="input-group mb-2">


                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-key"></i></div>

                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Пароль">
                    </div>
                </div>

                <div class="col-auto">
                </div>


                <button type="submit" class="btn btn-secondary mb-2">Войти</button>
            </div>

    </div>
    </form>

    </div>
</section>
<hr>
<section id="check">
    <div class="container">


        <div class="col-5 form-group">
            <label for="exampleFormControlSelect1">Параметр 1</label>
            <select class="form-control js-select-mark" id="exampleFormControlSelect1">
                <option value="0">--Выбрать марку--</option>
            </select>
        </div>

        </br>
        <div class="col-5">
            <input class="form-control" type="text" placeholder="Ваш текст">

            </br>

            <input class="form-control" type="text" placeholder="Ваш текст">
        </div>
        </br>

        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">Параметр 1
            </label>
        </div>

    </div>

</section>

<hr>
<div class="col-5 form-group">
<input type="text" name="referal" placeholder="Живой поиск" value="" class="who"  autocomplete="off">
    <ul class="search_result"></ul>
</div>

<br>
<br>
<br>
<br>
<br>


<br>
<br>
<br>
<br><br>
<br>
<br>
<br>

</body>

</html>

