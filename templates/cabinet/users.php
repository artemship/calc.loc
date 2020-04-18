<form action="/cabinet/users" method="post">

    <div class="cabinet_profile_line">
        <label>Имя</label>
        <input type="text">
    </div>
    <div class="cabinet_profile_line">
        <label>Фамилия</label>
        <input type="text">
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