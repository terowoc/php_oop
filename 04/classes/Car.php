<?php

class Car
{

	public $color;
	public $wheels = 4;
	public $speed = 180;
	public $brand;

	public function __construct ($color, $wheels, $speed, $brand)
	{
	    // print(__METHOD__);

		$this->color = $color;
		$this->wheels = $wheels;
		$this->speed = $speed;
		$this->brand = $brand;

	}

	public function getCarInfo ()
	{
		$text = "Car Info:\n\nColor: {$this->color}\nWheels: {$this->wheels}\nSpeed: {$this->speed}\nBrand: {$this->brand}\n";
	    return $text;
	}


	public function __destruct()
	{
		var_dump($this);
	}
}