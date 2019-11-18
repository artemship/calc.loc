<?php

namespace Calc\Models\Cars;

use Calc\Models\ActiveRecordEntity;

class Mark extends ActiveRecordEntity
{
    /** @var string */
    protected $markName;
    /** @var string */
    protected $model;
    /** @var int */
    protected $group;

    /**
     * @return string
     */
    public function getMarkName(): string
    {
        return $this->markName;
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
        return 'marks';
    }


}