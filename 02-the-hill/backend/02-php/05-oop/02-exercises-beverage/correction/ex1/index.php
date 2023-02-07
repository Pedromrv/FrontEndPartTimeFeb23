<?php

declare(strict_types=1);
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
error_reporting(-1);

require "./Beverage.php";

$cola = new Beverage("black", 2);

print_r($cola->getInfo());
echo "<br>";
print_r($cola->temperature);