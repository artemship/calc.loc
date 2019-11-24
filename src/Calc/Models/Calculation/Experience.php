<?php

namespace Calc\Models\Calculation;

use Calc\Models\ActiveRecordEntity;
use Calc\Services\Db;

class Experience extends ActiveRecordEntity
{
    /** @var int */
    protected $value;
    /** @var int */
    protected $experienceGroup;

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
    public function getExperienceGroup(): int
    {
        return $this->experienceGroup;
    }

    protected static function getTableName(): string
    {
        return 'experience';
    }

    public static function selectExperienceGroup(int $value): ?int
    {
        $db = Db::getInstance();
        $result = $db->query(
            'SELECT `experience_group` FROM `' . static::getTableName() . '` WHERE `value` = :value;',
            [':value' => $value]
        );
        return $result[0]->experience_group ? $result[0]->experience_group : null;
    }

    public static function selectMaxExperience(): ?int
    {
        $db = Db::getInstance();
        $result = $db->query(
            'SELECT MAX(`value`) AS max FROM `' . static::getTableName() . '`;'
        );
        return $result[0]->max ? $result[0]->max : null;
    }


}