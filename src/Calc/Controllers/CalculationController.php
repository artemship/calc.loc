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

        if (!isset($_POST['carAge'])) {
            die (json_encode('Wrong Car Age'));
        }

        if (empty($_POST['insurance'])) {
            die (json_encode('Wrong Insurance'));
        }

        if (!isset($_POST['franchise'])) {
            die (json_encode('Wrong Franchise'));
        }

        if (!isset($_POST['period'])) {
            die (json_encode('Wrong Period'));
        }

        if (!isset($_POST['paymentProcedure'])) {
            die (json_encode('Wrong Payment Procedure'));
        }

        $insuranceSum = preg_match('~^\d+$~', trim($_POST['insuranceSum'])) ? (int)($_POST['insuranceSum']) : null;
        $age = preg_match('~^\d+$~', trim($_POST['age'])) ? (int)($_POST['age']) : null;
        $experience = preg_match('~^\d+$~', trim($_POST['experience'])) ? (int)($_POST['experience']) : null;

        if ($insuranceSum <= 0) {
            die (json_encode('Wrong Insurance Sum'));
        }

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


        $mark = $_POST['mark'];
        $model = $_POST['model'];
        $group = (int)$_POST['group'];
        $carAge = (int)$_POST['carAge'];
        $insurance = $_POST['insurance'];
        $franchise = (int)$_POST['franchise'];
        $period = (int)$_POST['period'] + 1;
        $paymentProcedure = (float)$_POST['paymentProcedure'];
        $cWarranty = ((int)$_POST['isWarranty'] == 1) ? 1.15 : 1.6;
        $cGlassPayment = ((int)$_POST['noGlassPayment'] == 1) ? 0.97 : 1;
        $cBodyPayment = ((int)$_POST['noBodyPayment'] == 1) ? 0.97 : 1;
        $cAggregate = ((int)$_POST['isAggregate'] == 1) ? 0.96 : 1;

        $queryAge = ($age > $maxAge) ? $maxAge : $age;
        $queryExperience = ($experience > $maxExperience) ? $maxExperience : $experience;
        $tariff = SQL::getTariff($group, $carAge, $insurance, $franchise, $queryAge, $queryExperience, $period);
        $adjustingCar = SQL::getAdjustingCar($mark, $model);
        $adjustingCar = (is_null($adjustingCar)) ? 1 : $adjustingCar;
        $tariff = $tariff * $adjustingCar * $paymentProcedure * $cWarranty * $cGlassPayment * $cBodyPayment * $cAggregate;

        if ($franchise >= 10 && $model != 'Rio' && $model != 'Solaris') {
            $minTariff = 0.024190641;
        } elseif (($franchise >= 7 && $franchise < 10) || ($franchise >= 10 && ($model === 'Solaris' || $model === 'Rio'))) {
            $minTariff = 0.026693121;
        } else
            $minTariff = 0.029195601;

        if ($tariff < $minTariff) {
            $data = round($minTariff * 1.2, 2) . ' %';
        } elseif ($tariff * $insuranceSum / 100 < 34501) {
            $data = round(34500 / $insuranceSum * 100 * 1.2, 2) . ' %';
        } else
            $data = round($tariff * 1.2, 2) . ' %';

//        $data = round((($tariff < $minTariff) ? $minTariff : $tariff) * 1.2, 2) . ' %';
        echo json_encode($data);
        return;

        $baseTariff = BaseTariff::selectTariff($group, $insurance, $carAge);
        $franchiseCoefficient = Franchise::selectCoefficient($franchise, $group);
        $maxAge = Age::selectMaxAge();
        $maxExperience = Experience::selectMaxExperience();
        $age = ($age > $maxAge) ? $maxAge : $age;
        $experience = ($experience > $maxExperience) ? $maxExperience : $experience;
        $ageGroup = Age::selectAgeGroup($age);
        $experienceGroup = Experience::selectExperienceGroup($experience);
        $ageAndExperienceCoefficient = AgeAndExperienceCoefficient::selectCoefficient($ageGroup, $experienceGroup);
        $data = $baseTariff * $franchiseCoefficient * $ageAndExperienceCoefficient * 100 . '%';
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
        $periods = SQL::getValues(TABLE_NAME_PERIOD, 'value', false);

        $options = (require __DIR__ . '/../../settings.php')['calculation'];
        foreach ($options['insurance'] as $key => $option) {
            $insurances[$key] = $option;
        }
        foreach ($options['paymentProcedure'] as $key => $option) {
            $paymentProcedures[$key] = $option;
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
            'franchises' => $franchises,
            'periods' => $periods,
            'paymentProcedures' => $paymentProcedures
        ]);
    }

    public function getMarks()
    {
        $marks = SQL::getValues(TABLE_NAME_MARK, 'mark', true);
        echo json_encode($marks);
    }

}