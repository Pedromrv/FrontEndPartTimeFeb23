<?php

declare(strict_types=1);

class Beverage 
{
    public string $color;
    public float $price;
    public string $temperature;
    
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

}



