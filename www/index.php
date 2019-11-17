<?php
    require __DIR__ . '/../vendor/autoload.php';

    use Calc\Services\Db;

    include __DIR__ . '/../templates/header.php';

    $db = Db::getInstance();
    $entities = $db->query(
        'SELECT DISTINCT `mark_name` FROM `marks`');
    foreach ($entities as $entity) {
        echo '<option value="' . $entity->mark_name . '">' . $entity->mark_name . '</option>';
    }

    include __DIR__ . '/../templates/footer.php';
