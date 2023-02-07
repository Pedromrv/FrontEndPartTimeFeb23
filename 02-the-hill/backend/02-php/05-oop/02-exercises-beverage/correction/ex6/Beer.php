<?php

declare(strict_types=1);


class Beer extends Beverage
{
    private string $name;
    private float $alcoholPercentage;

    public function __construct($color, $price, $name, $alcoholPercentage)
    {
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    public function findBarname(): string
    {
        return self::BARNAME;
    }
}
