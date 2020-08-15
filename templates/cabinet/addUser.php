<form action="/cabinet/add/user" method="post">
    <div class="cabinet_profile_line">
        <label>Логин<span class="i-required">*</span></label>
        <input type="text" name="login"
               value="<?= $_POST['login'] ?? '' ?>">
    </div>
    <div class="cabinet_profile_line">
        <label>Имя<span class="i-required">*</span></label>
        <input type="text" name="firstName"
               value="<?= $_POST['firstName'] ?? '' ?>">
    </div>
    <div class="cabinet_profile_line">
        <label>Фамилия<span class="i-required">*</span></label>
        <input type="text" name="lastName"
               value="<?= $_POST['lastName'] ?? '' ?>">
    </div>
    <div class="cabinet_profile_line">
        <label>E-mail<span class="i-required">*</span></label>
        <input type="text" name="email"
               value="<?= $_POST['email'] ?? '' ?>">
    </div>
    <div class="cabinet_profile_line">
        <label></label>
        <?php if (!empty($error)): ?>
            <div style="color: #da0000; font-weight: bold"><?= $error ?></div>
        <?php endif; ?>
        <?php if (!empty($successful)): ?>
            <div style="color: #00a700; font-weight: bold"><?= $successful ?></div>
        <?php endif; ?>
    </div>
    <div class="cabinet_profile_line">
        <label></label>
        <input type="submit" value="Создать пользователя">
    </div>
</form>