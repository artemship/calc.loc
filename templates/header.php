<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/style.css" type="text/css"/>
    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"-->
    <!--          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Калькулятор</title>
    <!-- подключаем jquery -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/selectMark.js"></script>
    <script type="text/javascript" src="js/liveSearch.js"></script>
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <!--    <script src="js/search.js"></script>-->
</head>
<body>
<div class="main">
    <a href="/">
        <div class="header">
            <img class="logo" src="/img/logo.png">
        </div>
    </a>
    <nav>
        <div class="menu">
            <div class="flex-row">
                <?php if (!empty($user)): ?>
                <a href="/calculation">
                    <div class="menu-item">
                        Калькулятор
                    </div>
                </a>
                <a href="#">
                    <div class="menu-item">
                        MenuItem2
                    </div>
                </a>
                <?php endif; ?>
            </div>

            <div class="flex-row ">
                <?php if (!empty($user)): ?>
                    <a href="/cabinet/profile" class="flex-row text-login menu-item">
                        <div class="icon-login">
                            <?php include __DIR__ . '../../www/img/icons/icon-login.svg'; ?>
                        </div>
                        <?= $user->getLogin(); ?>
                    </a>
                    <a href="/logout" class="flex-row text-login menu-item">
                        <div class="icon-login">
                            <?php include __DIR__ . '../../www/img/icons/icon-logout.svg'; ?>
                        </div>
                        Выйти
                    </a>
                <?php else: ?>
                    <a href="/login" class="flex-row text-login menu-item">
                        <div class="icon-login">
                            <?php include __DIR__ . '../../www/img/icons/icon-login.svg'; ?>
                        </div>
                        <!--                        <img src="/img/icons/quser-icon.svg" class="icon-login">-->
                        Войти
                    </a>
                    <!--                    <span class="icon_login"></span>-->
                    <!--                | <a href="/register">Зарегистрироваться</a>-->
                <?php endif; ?>
            </div>


        </div>
    </nav>
