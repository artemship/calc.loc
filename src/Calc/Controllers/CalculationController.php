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
        if (!empty($_POST['group']) && !empty($_POST['insurance']) && isset($_POST['carAge'])) {
            $group = $_POST['group'];
            $insurance = $_POST['insurance'];
            $carAge = $_POST['carAge'];

            $baseTariff = BaseTariff::selectTariff($group, $insurance, $carAge);
        }

        if (!isset($baseTariff)) {
            echo 0;
            return;
        }

        if (isset($_POST['franchise'])) {
            $franchise = $_POST['franchise'];
            $franchiseCoefficient = Franchise::selectCoefficient($franchise, $group);
        }

        if (!empty($_POST['age']) && isset($_POST['experience'])) {
            $age = $_POST['age'];
            $experience = $_POST['experience'];
            if ($age - $experience < 18) {
                echo 0;
                return;
            }
            $maxAge = Age::selectMaxAge();
            $maxExperience = Experience::selectMaxExperience();
            $age = ($age > $maxAge) ? $maxAge : $age;
            $experience = ($experience > $maxExperience) ? $maxExperience : $experience;
            $ageGroup = Age::selectAgeGroup($age);
            $experienceGroup = Experience::selectExperienceGroup($experience);
            $ageAndExperienceCoefficient = AgeAndExperienceCoefficient::selectCoefficient($ageGroup, $experienceGroup);
        }

        echo $baseTariff * $franchiseCoefficient * $ageAndExperienceCoefficient * 100 . ' %';


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