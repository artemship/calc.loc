<?php

namespace Calc\Models\Calculation;

use Calc\Models\ActiveRecordEntity;

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
}