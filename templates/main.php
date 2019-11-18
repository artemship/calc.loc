<?php

include __DIR__ . '/../templates/header.php';

foreach ($marks as $entity) {
    echo '<option value="' . $entity->mark_name . '">' . $entity->mark_name . '</option>';
}

include __DIR__ . '/../templates/footer.php';