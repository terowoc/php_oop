<?php

class Car
{

	public $color;
	public $wheels = 4;
	public $speed = 180;
	public $brand;
	public static $countCar = 0;

	const TEST_CAR = 'BLA BLA';
	const TEST_CAR_SPEED = 300;

	public function __construct ($color, $wheels, $speed, $brand)
	{
		$this->color = $color;
		$this->wheels = $wheels;
		$this->speed = $speed;
		$this->brand = $brand;
		self::$countCar++;

	}

	public function getCarInfo ()
	{
		$text = "Car Info:\n\nColor: {$this->color}\nWheels: {$this->wheels}\nSpeed: {$this->speed}\nBrand: {$this->brand}\n";
	    return $text;
	}

	public static function getCount ()
	{
	    return self::$countCar;
	}

	public function getPrototypeInfo ()
	{
	    return "Test Car Info:\n\nName: " . self::TEST_CAR . "\nSpped: " . self::TEST_CAR_SPEED;
	}
}