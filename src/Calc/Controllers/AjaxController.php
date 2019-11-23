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
                echo $entity->base_tariff*100 . '%';
            }
        }
    }
}