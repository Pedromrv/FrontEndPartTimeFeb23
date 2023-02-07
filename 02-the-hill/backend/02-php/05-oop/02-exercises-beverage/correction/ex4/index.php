<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "./Beverage.php";
require "./Beer.php";


$duvel = new Beer("light", 3.5, "Duvel", 8.5);


echo $duvel->getAlcoholPercentage();
echo "<br>";
echo $duvel->getColor();
echo "<br>";
echo $duvel->getInfo();
echo "<br>";
echo $duvel->beerInfo();