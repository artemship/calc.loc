<?php

namespace Calc\Models\Calculation;

use Calc\Models\ActiveRecordEntity;
use Calc\Services\Db;

class Franchise extends ActiveRecordEntity
{
    /** @var int */
    protected $value;
    /** @var int */
    protected $groupId;
    /** @var int */
    protected $coefficient;

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
    public function getGroupId(): int
    {
        return $this->groupId;
    }

    /**
     * @return int
     */
    public function getCoefficient(): int
    {
        return $this->coefficient;
    }

    protected static function getTableName(): string
    {
        return 'franchises';
    }

    public static function selectCoefficient(int $value, int $groupId): ?float
    {
        $db = Db::getInstance();
        $result = $db->query(
            'SELECT `coefficient` FROM `' . static::getTableName() . '`
            WHERE `value` = :value AND `group_id` = :groupId;',
            [
                ':value' => $value,
                ':groupId' => $groupId
            ]
        );
        return $result[0]->coefficient ? $result[0]->coefficient : null;
    }


}