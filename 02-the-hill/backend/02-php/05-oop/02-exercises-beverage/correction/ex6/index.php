<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "./Beverage.php";
require "./Beer.php";

$cola = new Beverage("black", 2);

print_r($cola->getInfo());
echo "<br>";
print_r($cola->getTemperature());
echo "<br>";
$duvel = new Beer("blond", 3.5, "Duvel", 8.5);

print_r($duvel->getAlcoholPercentage());
echo "<br>";
echo $duvel->getAlcoholPercentage();
echo "<br>";
echo $duvel->getColor();
echo "<br>";
echo $duvel->getInfo();
echo "<br>";
echo $cola->getBarname();
echo "<br>";
echo $duvel->findBarname();
