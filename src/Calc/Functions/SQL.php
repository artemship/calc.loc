<?php

namespace Calc\Functions;

use Calc\Services\Db;

define('TABLE_NAME_FRANCHISES', 'franchises');
define('TABLE_NAME_MARKS', 'cars');

class SQL
{
    public static function getValues(string $tableName, string $columnName, bool $isDistinct): ?array
    {
        $db = Db::getInstance();
        $distinct = ($isDistinct === true) ? 'DISTINCT' : '';
        $result = $db->query('SELECT ' . $distinct . ' `' . $columnName . '` FROM `' . $tableName . '`;');
        if (empty($result)) {
            return null;
        }
        foreach ($result as $value) {
            $data [] = $value->$columnName;
        }
        return !empty($data) ? $data : null;
    }

}