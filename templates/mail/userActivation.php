<!--Добро пожаловать на наш портал!<br>-->
<!--Для активации вашего аккаунта нажмите <a href="http://calc.loc/users/--><?//=$userId?><!--/activate/--><?//=$code?><!--">сюда</a>.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        body {
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            margin: 16px 0;
            text-align: center;
            font-size: 24px;
        }
    </style>
    <meta charset="utf-8">
    <title>Регистрация</title>
</head>
<body>
    <h1>Добро пожаловать!</h1>
    <div>
        Вам предоставлен доступ к системе. Для завершения процедуры регистрации, пройдите по ссылке:
        http://calc.loc/users/<?=$userId?>/activate/<?=$code?>
    </div>
    <div>
        Ваш логин: <b><?= $userLogin ?></b>
    </div>
    <div>
        Ваш пароль: <b><?= $userPassword ?></b>
    </div>
</body>
</html>