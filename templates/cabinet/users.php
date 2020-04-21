<script src="/js/cabinet/users.js"></script>
<form action="/cabinet/users" method="post">

<!--    <table class="cabinet_table">-->
<!--        <th>Логин</th>-->
<!--        <th>Имя</th>-->
<!--        <th>Email</th>-->
<!--        <th>Права</th>-->
<!--        <th>Доступ</th>-->
<!--        <input type="hidden" name="firstVisibleUserId" value="--><?//= $arrayUsers[1]->getId() ?><!--">-->
<!--        --><?php //foreach ($arrayUsers as $index=>$user): ?>
<!--            <tr>-->
<!--                <td>--><?//= $user->getLogin() ?><!--</td>-->
<!--                <td>--><?//= $user->getLastName() . ' ' . $user->getFirstName() ?><!--</td>-->
<!--                <td>--><?//= $user->getEmail() ?><!--</td>-->
<!--                <td>--><?//= $user->getRole() ?><!--</td>-->
<!--                <td>-->
<!--                    --><?php //if ($user->isAccessed() === true): ?>
<!--                        <input class="js-provide-access"-->
<!--                               type="checkbox"-->
<!--                               name="--><?//= $user->getId() ?><!--"-->
<!--                               checked-->
<!--                        >-->
<!--                    --><?php //else: ?>
<!--                        <input class="js-provide-access"-->
<!--                               type="checkbox"-->
<!--                               name="--><?//= $user->getId() ?><!--"-->
<!--                        >-->
<!--                    --><?// endif; ?>
<!--                </td>-->
<!--            </tr>-->
<!--        --><?// endforeach; ?>
<!--    </table>-->

    <div class="cabinet_users_table">
        <div class="cabinet_users_table-title">
            <div class="cabinet_users_table-cell">Логин</div>
            <div class="cabinet_users_table-cell">Имя</div>
            <div class="cabinet_users_table-cell">Email</div>
            <div class="cabinet_users_table-cell">Права</div>
            <div class="cabinet_users_table-cell">Доступ</div>
        </div>
        <?php foreach ($arrayUsers as $index=>$user): ?>
            <div class="cabinet_users_table-row">
                <div class="cabinet_users_table-cell"><?= $user->getLogin() ?></div>
                <div class="cabinet_users_table-cell"><?= $user->getLastName() . ' ' . $user->getFirstName() ?></div>
                <div class="cabinet_users_table-cell"><?= $user->getEmail() ?></div>
                <div class="cabinet_users_table-cell"><?= $user->getRole() ?></div>
                <div class="cabinet_users_table-cell">
                    <?php if ($user->isAccessed() === true): ?>
                        <label class="switch">
                            <input class="js-provide-access"
                                   type="checkbox"
                                   name="<?= $user->getId() ?>"
                                   checked
                            >
                            <span class="slider round"></span>
                        </label>

                    <?php else: ?>
                        <label class="switch">
                            <input class="js-provide-access"
                                   type="checkbox"
                                   name="<?= $user->getId() ?>"
                            >
                            <span class="slider round"></span>
                        </label>
                    <? endif; ?>
                </div>
            </div>
        <? endforeach; ?>

    </div>


<!--    <div class="cabinet_profile_line">-->
<!--        <label>Имя</label>-->
<!--        <input type="text">-->
<!--    </div>-->
<!--    <div class="cabinet_profile_line">-->
<!--        <label>Фамилия</label>-->
<!--        <input type="text">-->
<!--    </div>-->
<!--    <div class="cabinet_profile_line">-->
<!--        <label></label>-->
<!--        --><?php //if (!empty($error)): ?>
<!--            <div style="color: #da0000; font-weight: bold">--><?//= $error ?><!--</div>-->
<!--        --><?php //endif; ?>
<!--        --><?php //if (!empty($successful)): ?>
<!--            <div style="color: #00a700; font-weight: bold">--><?//= $successful ?><!--</div>-->
<!--        --><?php //endif; ?>
<!--    </div>-->
<!--    <div class="cabinet_profile_line">-->
<!--        <label></label>-->
<!--        <input type="submit" value="Сохранить">-->
<!--    </div>-->


</form>