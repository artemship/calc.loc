<?php

namespace Calc\Controllers;

use Calc\Functions\SQL;
use Calc\Models\Calculation\Age;
use Calc\Models\Calculation\AgeAndExperienceCoefficient;
use Calc\Models\Calculation\BaseTariff;
use Calc\Models\Calculation\Experience;
use Calc\Models\Calculation\Franchise;
use Calc\Services\Db;

class CalculationController extends AbstractController
{
    public function submit()
    {
        static $maxAge = 0;
        static $maxExperience = 0;

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

        if ($maxAge === 0) {
            $maxAge = SQL::findMax(TABLE_NAME_AGE, 'value');
        }
        if ($maxExperience === 0) {
            $maxExperience = SQL::findMax(TABLE_NAME_EXPERIENCE, 'value');
        }


        $group = $_POST['group'];
        $insurance = $_POST['insurance'];
        $carAge = $_POST['carAge'];
        $franchise = $_POST['franchise'];

//        $db = Db::getInstance();
//        $result = $db->query(
//            'SELECT `value` FROM `' . static::getTableName() . '`
//            WHERE `group_id` = :groupId AND `insurance` = :insurance AND `car_age` = :carAge;',
//            [
//                ':groupId' => $group,
//                ':insurance' => $insurance,
//                ':carAge' => $carAge
//            ]
//        );
//        $baseTariff = $result[0]->value;

        $queryAge = ($age > $maxAge) ? $maxAge : $age;
        $queryExperience = ($experience > $maxExperience) ? $maxExperience : $experience;
        $ageGroup = SQL::findValueByColumn(TABLE_NAME_AGE, 'age_group', 'value', $queryAge);
        $experienceGroup = SQL::findValueByColumn(TABLE_NAME_EXPERIENCE, 'experience_group', 'value', $queryExperience);
        $data = SQL::getTariff();
        return;

        $baseTariff = BaseTariff::selectTariff($group, $insurance, $carAge);
        $franchiseCoefficient = Franchise::selectCoefficient($franchise, $group);

//        $maxAge = Age::selectMaxAge();
//        $maxExperience = Experience::selectMaxExperience();
//        $age = ($age > $maxAge) ? $maxAge : $age;
//        $experience = ($experience > $maxExperience) ? $maxExperience : $experience;
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

    public function calculation()
    {
        $marks = SQL::getValues(TABLE_NAME_MARK, 'mark', true);
        $franchises = SQL::getValues(TABLE_NAME_FRANCHISE, 'value', true);

        $options = (require __DIR__ . '/../../settings.php')['calculation'];
        foreach ($options['insurance'] as $key => $option) {
            $insurances[$key] = $option;
        }
//        foreach ($options['franchise'] as $option) {
//            $franchises[] = $option;
//        }

        for ($i = 0; $i <= 6; $i++) {
            $carsAge[$i] = (string)((int)(date('Y') - $i));
        }

        $this->view->renderHtml('main.php', [
            'marks' => $marks,
            'carsAge' => $carsAge,
            'insurances' => $insurances,
            'franchises' => $franchises
        ]);
    }

}