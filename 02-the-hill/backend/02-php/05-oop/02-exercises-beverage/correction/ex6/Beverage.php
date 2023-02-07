<?php

declare(strict_types=1);

class Beverage 
{
    private string $color;
    private float $price;
    private string $temperature;
    const BARNAME = "Le Warzone";
    
    public function __construct($color, $price, $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
    
    // The functions
    public function getInfo(): string
    {
        return "This beverage is {$this->getTemperature()} and {$this->getColor()}.";
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getTemperature(): string
    {
        return $this->temperature;
    }

    public function getBarname(): string
    {
        return self::BARNAME;
    }

}



