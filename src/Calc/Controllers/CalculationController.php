<?php

namespace Calc\Controllers;

use Calc\Models\Calculation\BaseTariff;
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
            $franchiseValue = $_POST['franchise'];
            $franchise = Franchise::selectCoefficient($franchiseValue, $group);
        }




        echo $baseTariff * $franchise * 100 . ' %';


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