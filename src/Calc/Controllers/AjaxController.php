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
                'SELECT `value` FROM `base_tariffs`
                WHERE `group_id` = :group AND `car_age` = :ageCar AND `insurance` = :insuranceRisk;',
                [
                    ':group' => $group,
                    ':ageCar' => $ageCar,
                    ':insuranceRisk' => $insuranceRisk
                ]
            );
            foreach ($entities as $entity) {
                echo $entity->value * 100 . ' %';
            }
        }
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