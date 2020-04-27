<?php

namespace Calc\Models\Partners;

use Calc\Models\ActiveRecordEntity;
use Calc\Services\Db;

class Partner extends ActiveRecordEntity
{
    /** @var string */
    protected $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    protected static function getTableName(): string
    {
        return 'partners';
    }


    public static function getAllPartners(): ?array
    {
        $db = Db::getInstance();
        $result = $db->query(
            'SELECT b.id, p.name AS partner_name, b.name AS branch_name, b.city, b.address
               FROM `'. static::getTableName().'` AS p
                    LEFT JOIN `' . Branch::getTableName() . '` AS b
                    ON p.`id` = b.`partner_id`;'
        );
        if ($result === []) {
            return null;
        }
        return $result;
    }


}