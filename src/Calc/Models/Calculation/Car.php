<?php

namespace Calc\Models\Calculation;

use Calc\Models\ActiveRecordEntity;

class Car extends ActiveRecordEntity
{
    /** @var string */
    protected $mark;
    /** @var string */
    protected $model;
    /** @var int */
    protected $group;

    /**
     * @return string
     */
    public function getMark(): string
    {
        return $this->mark;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return int
     */
    public function getGroup(): int
    {
        return $this->group;
    }

    protected static function getTableName(): string
    {
        return 'cars';
    }


}