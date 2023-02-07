<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "./Beverage.php";

$cola = new Beverage("black", 2);

echo $cola->getInfo();
echo "<br>";
echo $cola->getTemperature();
echo "<br>";
$cola->setPrice(3.5);
echo $cola->getPrice();