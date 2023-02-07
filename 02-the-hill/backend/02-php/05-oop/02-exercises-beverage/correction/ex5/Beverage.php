<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Beverage 
{
    private string $color;
    private float $price;
    private string $temperature;
    
    public function __construct($color, $price, $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
    
    // The functions
    public function getInfo(): string
    {
        return "This beverage is $this->temperature and $this->color.";
    }

    public function getTemperature(): string
    {
        return $this->temperature;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): float
    {
        return $this->price = $price;
    }

}



