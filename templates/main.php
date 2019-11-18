<?php
include __DIR__ . '/../templates/header.php';

foreach ($marks as $mark) {
    echo '<option value="' . $mark->getMarkName() . '">' . $mark->getMarkName() . '</option>';
}

include __DIR__ . '/../templates/footer.php';