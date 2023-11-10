<?php

require_once 'classes/Car.php';

$car1 = new Car('pink', 4, 300, 'KIA');
$car2 = new Car('black', 6, 250, 'Hummer');
$car3 = new Car('white', 4, 280, 'BMW');

$count = Car::getCount();
$testCar = $car1->getPrototypeInfo();

print("Count: " . $count . "\n\n");
print($testCar);