<?php
include __DIR__ . '/../templates/header.php';

foreach ($cars as $car) {
    echo '<option value="' . $car->getMark() . '">' . $car->getMark() . '</option>';
}

include __DIR__ . '/../templates/footer.php';

include __DIR__ . '/../templates/testFront.php';