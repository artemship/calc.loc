<?php

namespace Calc\Models\Calculation;

use Calc\Models\ActiveRecordEntity;
use Calc\Services\Db;

class Age extends ActiveRecordEntity
{
    /** @var int */
    protected $value;
    /** @var int */
    protected $ageGroup;

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @return int
     */
    public function getAgeGroup(): int
    {
        return $this->ageGroup;
    }

    protected static function getTableName(): string
    {
        return 'age';
    }

    public static function selectAgeGroup(int $value): ?int
    {
        $db = Db::getInstance();
        $result = $db->query(
            'SELECT `age_group` FROM `' . static::getTableName() . '` WHERE `value` = :value;',
            [':value' => $value]
        );
        return $result[0]->age_group ? $result[0]->age_group : null;
    }

    public static function selectMaxAge(): ?int
    {
        $db = Db::getInstance();
        $result = $db->query(
            'SELECT MAX(`value`) AS max FROM `' . static::getTableName() . '`;'
        );
        return $result[0]->max ? $result[0]->max : null;
    }


}