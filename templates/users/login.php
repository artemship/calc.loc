<?php include __DIR__ . '/../header.php'; ?>
    <h1>Вход в личный кабинет</h1>

    <div class="flex-row">
        <form action="/login" method="post">
            <div class="login-form flex-column">
                <?php if (!empty($error)): ?>
<!--                    <div style="color: #d02138;padding: 6px;margin: 24px 0 0 0">--><?//= $error ?><!--</div>-->
                <?php endif; ?>
                <div class="table">
                    <div class="table-row">
                        <label class="login-label">Логин</label>
                        <input class="login-input" type="text" name="login" value="<?= $_POST['login'] ?? '' ?>">
                        <label class="login-obligatory">Заполните поле</label>
                    </div>

                    <div class="table-row">
                        <label class="login-label">Пароль</label>
                        <input class="login-input" type="password" name="password" value="<?= $_POST['password'] ?? '' ?>">
                        <label class="login-obligatory">Заполните поле</label>
<!--                        <label class="table-label forgot">Забыли пароль?</label>-->
                        <a href="#">Забыли пароль?</a>

                    </div>
                    <?php if (!empty($error)): ?>
                        <div class="table-row">
                            <label class="login-label"></label>
                            <div class="login-error"><?= $error ?></div>
<!--                            <label class="obligatory">--><?//= $error ?><!--</label>-->
                        </div>
<!--                        <div style="color: #d02138;padding: 6px;margin: 24px 0 0 0">--><?//= $error ?><!--</div>-->
                    <?php endif; ?>

                    <div class="table-row ta-center">
                        <label class="login-label"></label>
                        <input class="login-button" type="submit" value="Войти">
                    </div>
                </div>
            </div>

        </form>
    </div>


<!--    <form action="/login" method="post">-->
<!--        <label>Email <input type="text" name="login" value="--><?//= $_POST['login'] ?? '' ?><!--"></label>-->
<!--        <br><br>-->
<!--        <label>Пароль <input type="password" name="password" value="--><?//= $_POST['password'] ?? '' ?><!--"></label>-->
<!--        <br><br>-->
<!--        <input type="submit" value="Войти">-->
<!--    </form>-->
<?php include __DIR__ . '/../footer.php'; ?>