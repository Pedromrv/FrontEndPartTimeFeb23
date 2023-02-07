<?php

declare(strict_types=1);


class Beer extends Beverage
{
    protected string $name;
    protected float $alcoholPercentage;

    public function __construct($color, $price, $name, $alcoholPercentage)
    {
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage()
    {
        return $this->alcoholPercentage;
    }

    private function beerInfo(): string
    {
        return "Hi, I'm $this->name and have an alcohol percentage of {$this->getAlcoholPercentage()}% and I have a {$this->getColor()} color.";
    }

    public function getBeerInfo(): string
    {
        return $this->beerInfo();
    }
}
