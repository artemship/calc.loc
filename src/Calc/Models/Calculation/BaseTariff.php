<?php


namespace Calc\Models\Calculation;


use Calc\Models\ActiveRecordEntity;
use Calc\Services\Db;

class BaseTariff extends ActiveRecordEntity
{
    /** @var int */
    protected $groupId;
    /** @var string */
    protected $insurance;
    /** @var int */
    protected $carAge;
    /** @var float */
    protected $value;

    /**
     * @return int
     */
    public function getGroupId(): int
    {
        return $this->groupId;
    }

    /**
     * @return string
     */
    public function getInsurance(): string
    {
        return $this->insurance;
    }

    /**
     * @return int
     */
    public function getCarAge(): int
    {
        return $this->carAge;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    protected static function getTableName(): string
    {
        return 'base_tariffs';
    }

    public static function selectTariff(int $groupId, string $insurance, int $carAge): ?float
    {
        $db = Db::getInstance();
        $result = $db->query(
            'SELECT `value` FROM `' . static::getTableName() . '`
            WHERE `group_id` = :groupId AND `insurance` = :insurance AND `car_age` = :carAge;',
            [
                ':groupId' => $groupId,
                ':insurance' => $insurance,
                ':carAge' => $carAge
            ]
        );
        return $result[0]->value ? $result[0]->value : null;
    }


}