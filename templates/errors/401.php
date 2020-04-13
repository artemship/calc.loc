<?php include __DIR__ . '/../header.php'; ?>
    <h1>Вы не авторизованы</h1>
    <h2 style="display: none"><?= $error ?></h2>
    <h2 class="exceptionErrorMessage">Для доступа к этой странице нужно <a href="/login">войти на сайт</a></h2>
<?php include __DIR__ . '/../footer.php'; ?>