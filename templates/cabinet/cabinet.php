<?php include __DIR__ . '/../header.php'; ?>
    <h1><?= $title ?></h1>
    <div class="cabinet_container">

        <div class="cabinet_sidebar">
            <div class="cabinet_user">
                <div class="cabinet_user_name">
                    <?= $user->getFirstName() . ' ' . $user->getLastName(); ?>
                </div>
                <div class="cabinet_user_contact">
                    <?= $user->getEmail() ?>
                </div>
                <a href="/logout">
                    <button class="cabinet_user_button"> Выйти</button>
                </a>
            </div>
            <div class="cabinet_tabs">
                <a href="/cabinet/profile">
                    <div class="cabinet_tab">Личные данные</div>
                </a>
                <a href="/cabinet/policies">
                    <div class="cabinet_tab">Полисы</div>
                </a>
                <a href="/cabinet/reports">
                    <div class="cabinet_tab">Отчеты</div>
                </a>
                <a href="/cabinet/feedback">
                    <div class="cabinet_tab">Обратная связь</div>
                </a>
                <a href="/cabinet/partners">
                    <div class="cabinet_tab">Партнеры</div>
                </a>
                <a href="/cabinet/users">
                    <div class="cabinet_tab">Пользователи</div>
                </a>
                <a href="/cabinet/configuration">
                    <div class="cabinet_tab">Конфигурация</div>
                </a>
            </div>
        </div>

        <div class="cabinet_content">
            <?php
            if ($tabName === 'partners'): include __DIR__ . '/../cabinet/partners.php';
            elseif ($tabName === 'users'): include __DIR__ . '/../cabinet/users.php';

            else: include __DIR__ . '/../cabinet/profile.php';
            endif ?>
            <!--    --><?php //include __DIR__ . '/../cabinet/profile.php' ?>
        </div>

    </div>
<?php include __DIR__ . '/../footer.php'; ?>