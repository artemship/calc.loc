<?php

namespace Calc\Functions;

use Calc\Services\Db;

define('TABLE_NAME_FRANCHISE', 'franchises');
define('TABLE_NAME_MARK', 'cars');
define('TABLE_NAME_AGE', 'age');
define('TABLE_NAME_EXPERIENCE', 'experience');
define('TABLE_NAME_PERIOD', 'insurance_period');
define('TABLE_NAME_ADJUSTING_CARS', 'adjusting_cars');

class SQL
{
    public static function getValues(string $fromTable, string $selectColumn, bool $isDistinct): ?array
    {
        $db = Db::getInstance();
        $distinct = ($isDistinct === true) ? 'DISTINCT' : '';
        $result = $db->query('SELECT ' . $distinct . ' `' . $selectColumn . '` FROM `' . $fromTable . '`;');
        if (empty($result)) {
            return null;
        }
        foreach ($result as $value) {
            $data [] = $value->$selectColumn;
        }
        return !empty($data) ? $data : null;
    }

    public static function findMax(string $fromTable, string $selectColumn)
    {
        $db = Db::getInstance();
        $result = $db->query('SELECT MAX(`' . $selectColumn . '`) AS max FROM `' . $fromTable . '`;');
        return $result[0]->max ? $result[0]->max : null;
    }

    public static function findValueByColumn(string $fromTable, string $selectColumn, string $whereColumn, int $value)
    {
        $db = Db::getInstance();
        $result = $db->query(
            'SELECT `' . $selectColumn . '` FROM `' . $fromTable . '` WHERE `' . $whereColumn . '` = :value;',
            [':value' => $value]
        );
        return $result[0]->$selectColumn ? $result[0]->$selectColumn : null;
    }

    public static function getAdjustingCar(string $mark, string $model): ?float
    {
        $value = $mark . ' ' . $model;
        $db = Db::getInstance();
        $result = $db->query(
            'SELECT `coefficient` FROM `' . TABLE_NAME_ADJUSTING_CARS . '` WHERE `value` = :value;',
            [':value' => $value]
        );
        return $result[0]->coefficient ? $result[0]->coefficient : null;
    }

    public static function getTariff(int $group, int $carAge, string $insurance, int $franchise, int $age, int $experience, int $period): ?float
    {
        $db = Db::getInstance();
        $result = $db->query(
            'SELECT b.value
                         * f.coefficient
                         * (SELECT ae.coefficient
                              FROM age_and_experience_coefficient AS ae
                                   LEFT JOIN age AS a
                                   ON ae.age_group_id = a.age_group
                
                                   LEFT JOIN experience AS e
                                   ON ae.experience_group_id = e.experience_group
                             WHERE a.value = :age AND e.value = :experience)
                         * (SELECT p.coefficient
                              FROM insurance_period AS p
                             WHERE p.id = :period)
                         * 100 AS tariff
                    FROM base_tariffs AS b
                         LEFT JOIN franchises AS f
                         ON b.group_id = f.group_id
                   WHERE b.group_id = :group
                     AND b.insurance = :insurance
                     AND b.car_age = :carAge
                     AND f.value = :franchise;',
            [
                ':age' => $age,
                ':experience' => $experience,
                ':group' => $group,
                ':insurance' => $insurance,
                ':carAge' => $carAge,
                ':franchise' => $franchise,
                ':period' => $period,
            ]
        );
        return $result[0]->tariff ? $result[0]->tariff : null;
    }


}