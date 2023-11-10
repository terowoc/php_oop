<?php

require_once 'classes/MyCar.php';

$myCar = new MyCar();

$myCar->model = 'X7';
$myCar->brand = 'BMW';
$myCar->color = 'black';
$myCar->year = '2022';

$myCarInfo = $myCar->getCarInfo();
print($myCarInfo);