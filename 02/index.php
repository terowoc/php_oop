<?php

require_once 'classes/Car.php';

$car1 = new Car();
$car2 = new Car();
print_r($car1);

$car1->color = 'black';
$car1->speed = 300;
$car1->model = 'X6';
$car1->brand = 'BMW';

$car2->color = 'white';
$car2->speed = 280;
$car2->brand = 'Volvo';

print_r($car1);
print_r($car2);