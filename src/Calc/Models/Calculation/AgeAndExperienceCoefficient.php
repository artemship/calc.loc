<?php

namespace Calc\Models\Calculation;

use Calc\Models\ActiveRecordEntity;
use Calc\Services\Db;

class AgeAndExperienceCoefficient extends ActiveRecordEntity
{
    /** @var int */
    protected $ageGroupId;
    /** @var int */
    protected $experienceGroupId;
    /** @var float */
    protected $coefficient;

    /**
     * @return int
     */
    public function getAgeGroupId(): int
    {
        return $this->ageGroupId;
    }

    /**
     * @return int
     */
    public function getExperienceGroupId(): int
    {
        return $this->experienceGroupId;
    }

    /**
     * @return float
     */
    public function getCoefficient(): float
    {
        return $this->coefficient;
    }

    protected static function getTableName(): string
    {
        return 'age_and_experience_coefficient';
    }

    public static function selectCoefficient(int $ageGroupId, int $experienceGroupId): ?float
    {
        $db = Db::getInstance();
        $result = $db->query(
            'SELECT `coefficient` FROM `' . static::getTableName() . '`
            WHERE `age_group_id` = :ageGroupId AND `experience_group_id` = :experienceGroupId;',
            [
                ':ageGroupId' => $ageGroupId,
                ':experienceGroupId' => $experienceGroupId
            ]
        );
        return $result[0]->coefficient ? $result[0]->coefficient : null;
    }

}