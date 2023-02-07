<?php

declare(strict_types=1);

class Beverage 
{
    protected string $color;
    protected float $price;
    protected string $temperature;
    
    public function __construct($color, $price, $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }
    
    // The functions
    public function getInfo()
    {
        return "This beverage is $this->temperature and $this->color.";
    }

    public function getColor()
    {
        return $this->color;
    }

}



