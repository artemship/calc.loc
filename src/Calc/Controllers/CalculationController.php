<?php

namespace Calc\Controllers;

use Calc\Models\Calculation\Age;
use Calc\Models\Calculation\AgeAndExperienceCoefficient;
use Calc\Models\Calculation\BaseTariff;
use Calc\Models\Calculation\Experience;
use Calc\Models\Calculation\Franchise;
use Calc\Services\Db;

class CalculationController
{
    public function submit()
    {

        if (empty($_POST['group'])) {
            die (json_encode('Wrong Mark/Model'));
        }

        if (empty($_POST['insurance'])) {
            die (json_encode('Wrong Insurance'));
        }

        if (!isset($_POST['carAge'])) {
            die (json_encode('Wrong Car Age'));
        }

        if (!isset($_POST['franchise'])) {
            die (json_encode('Wrong Franchise'));
        }

        $age = preg_match('~^\d+$~', trim($_POST['age'])) ? (int)($_POST['age']) : null;
        $experience = preg_match('~^\d+$~', trim($_POST['experience'])) ? (int)($_POST['experience']) : null;

        if ($age < 18) {
            die (json_encode('Wrong Age'));
        }

        if (is_null($experience) || $age - $experience < 18) {
            die (json_encode('Wrong Experience'));
        }

        $group = $_POST['group'];
        $insurance = $_POST['insurance'];
        $carAge = $_POST['carAge'];

        $baseTariff = BaseTariff::selectTariff($group, $insurance, $carAge);

        $franchise = $_POST['franchise'];
        $franchiseCoefficient = Franchise::selectCoefficient($franchise, $group);

        $maxAge = Age::selectMaxAge();
        $maxExperience = Experience::selectMaxExperience();
        $age = ($age > $maxAge) ? $maxAge : $age;
        $experience = ($experience > $maxExperience) ? $maxExperience : $experience;
        $ageGroup = Age::selectAgeGroup($age);
        $experienceGroup = Experience::selectExperienceGroup($experience);
        $ageAndExperienceCoefficient = AgeAndExperienceCoefficient::selectCoefficient($ageGroup, $experienceGroup);

        $data = $baseTariff * $franchiseCoefficient * $ageAndExperienceCoefficient * 100 . ' %';

        echo json_encode($data);


    }

    public function selectMark()
    {
        if (isset($_POST['mark']) && !empty($_POST['mark'])) {
            $mark = $_POST['mark'];
            $db = Db::getInstance();
            $entities = $db->query(
                'SELECT `model`, `group` FROM `cars` WHERE `mark` = :mark;',
                [':mark' => $mark]
            );
            foreach ($entities as $entity) {
                echo '<option value="' . $entity->group . '">' . $entity->model . '</option>';
            }
        }
    }

}