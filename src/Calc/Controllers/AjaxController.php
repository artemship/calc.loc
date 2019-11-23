<?php


namespace Calc\Controllers;


use Calc\Services\Db;

class AjaxController
{
    public function submit()
    {
        if (isset($_POST['group']) && !empty($_POST['group'])) {
            $group = $_POST['group'];
            $ageCar = $_POST['ageCar'];
            $insuranceRisk = $_POST['insuranceRisk'];
            $db = Db::getInstance();
            $entities = $db->query(
                'SELECT `base_tariff` FROM `tariffs`WHERE `group_id` = ' . $group . ' AND `car_age` = ' . $ageCar . ' AND `insurance` = \'' . $insuranceRisk . '\';'
            );
            foreach ($entities as $entity) {
                //echo '<input type="text" value="' . $entity->base_tariff . '">';
                echo $entity->base_tariff * 100 . '%';
            }
        }
    }

    public function selectMark()
    {
        if (isset($_POST['mark']) && !empty($_POST['mark'])) {
            $mark = $_POST['mark'];
            $db = Db::getInstance();
            $entities = $db->query(
                'SELECT `model`, `group` FROM `cars` WHERE `mark` = "' . $mark . '"');
            echo '<select class="form-control" id="js-select-model">';
            foreach ($entities as $entity) {
                echo '<option value="' . $entity->group . '">' . $entity->model . '</option>';
            }
            echo '</select>';

        } else {
            echo '<select class="form-control" id="js-select-model" disabled><option value="0">--Выбрать модель--</option></select>';
        }
    }

}