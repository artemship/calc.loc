<script>
    $(function () {
        $('select[name="command"]').change(function () {
            alert($('select[name="command"]').val());
        });
    });
</script>
<?php

use Calc\Services\Db;

if (isset($_POST['id']) && !empty($_POST['id'])){
    $id = intval($_POST['id']);
    $db = Db::getInstance();
    $entities = $db->query(
        'SELECT * FROM `team` WHERE `id_league` = $id');
    echo '<select name="command">';
    foreach ($entities as $entity) {
        echo '<option value="' . $entity->id . '">' . $entity->title . '</option>';
    }
    echo '</select>';

} else {
    echo '<select name="command" diabled><option value="0">--Выберите команду--</option></select>';

}