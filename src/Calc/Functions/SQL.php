<?php

namespace Calc\Functions;

use Calc\Services\Db;

define('TABLE_NAME_FRANCHISE', 'franchises');
define('TABLE_NAME_MARK', 'cars');
define('TABLE_NAME_AGE', 'age');
define('TABLE_NAME_EXPERIENCE', 'experience');

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

//    public static function getTariff(): ?float
//    {
//        $db = Db::getInstance();
//        $result = $db->query(
//            'SELECT `' . $selectColumn . '` FROM `' . $fromTable . '` WHERE `' . $whereColumn . '` = :value;',
//            [':value' => $value]
//        );
//        return $result[0]->$selectColumn ? $result[0]->$selectColumn : null;
//    }

}