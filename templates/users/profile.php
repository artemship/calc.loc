<?php include __DIR__ . '/../header.php'; ?>
    <h1>Личный кабинет</h1>
    <?php if (!empty($error)): ?>
        <div style="background-color: red;padding: 5px;margin: 15px"><?= $error ?></div>
    <?php endif; ?>
    <?php if (!empty($successful)): ?>
        <div style="background-color: greenyellow;padding: 5px;margin: 15px"><?= $successful ?></div>
    <?php endif; ?>
    <form action="/profile" method="post">
        <label>Новый Пароль <input type="password" name="password" value="<?= $_POST['password'] ?? '' ?>"></label>
        <input type="submit" value="Изменить" class="e-btn">
    </form>
<?php include __DIR__ . '/../footer.php'; ?>