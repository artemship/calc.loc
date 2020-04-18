<form action="/cabinet/profile" method="post">
    <div class="cabinet_profile_line">
        <label>Имя<span class="i-required">*</span></label>
        <input type="text" name="firstName"
               value="<?= $_POST['firstName'] ?? $user->getFirstName() ?>">
    </div>
    <div class="cabinet_profile_line">
        <label>Фамилия<span class="i-required">*</span></label>
        <input type="text" name="lastName"
               value="<?= $_POST['lastName'] ?? $user->getLastName() ?>">
    </div>
    <div class="cabinet_profile_line">
        <label>E-mail<span class="i-required">*</span></label>
        <input type="text" name="email"
               value="<?= $_POST['email'] ?? $user->getEmail() ?>">
    </div>
    <div class="cabinet_profile_line">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Новый пароль"
               value="<?= $_POST['password'] ?? '' ?>">
    </div>
    <div class="cabinet_profile_line">
        <label></label>
        <input type="password" name="confirmPassword" placeholder="Пароль еще раз"
               value="<?= $_POST['confirmPassword'] ?? '' ?>">
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
        <input type="submit" value="Сохранить">
    </div>
</form>