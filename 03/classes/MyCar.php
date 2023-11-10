<?php

class MyCar
{
	public $model;
	public $brand;
	public $color;
	public $wheels = 4;
	public $year;

	public function getCarInfo ()
	{
		$text = "My Car:\n\nModel: {$this->model}\nBrand: {$this->brand}\nColor: {$this->color}\nWheels: {$this->wheels}\nYear: {$this->year}\n";

		return $text;
	}
}