<?php

require_once 'classes/Car.php';

$car = new Car('pink', 4, 300, 'KIA');

$carInfo = $car->getCarInfo();
print($carInfo);