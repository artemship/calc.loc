<script>
    $(function () {
        $('select[name="js-select-model"]').change(function () {
            alert($('select[name="js-select-model"]').val());
        });
    });
</script>
<?php
require __DIR__ . '/../vendor/autoload.php';

use Calc\Services\Db;

if (isset($_POST['mark']) && !empty($_POST['mark'])) {
    $mark = $_POST['mark'];
    $db = Db::getInstance();
    $entities = $db->query(
        'SELECT `model`, `group` FROM `cars` WHERE `mark` = "' . $mark .'"');
    echo '<select name="js-select-model">';
    foreach ($entities as $entity) {
        echo '<option value="' . $entity->group . '">' . $entity->model . '</option>';
    }
    echo '</select>';

} else {
    echo '<select name="js-select-model" disabled><option value="0">--Выбрать модель--</option></select>';

}