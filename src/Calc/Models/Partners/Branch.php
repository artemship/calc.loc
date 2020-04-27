<?php

namespace Calc\Models\Partners;

use Calc\Models\ActiveRecordEntity;

class Branch extends ActiveRecordEntity
{
    /** @var int */
    protected $partnerId;
    /** @var string */
    protected $name;
    /** @var string */
    protected $city;
    /** @var string */
    protected $address;

    /**
     * @return int
     */
    public function getPartnerId(): int
    {
        return $this->partnerId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param int $partnerId
     */
    public function setPartnerId(int $partnerId): void
    {
        $this->partnerId = $partnerId;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    protected static function getTableName(): string
    {
        return 'branches';
    }
}