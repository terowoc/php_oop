<?php

class Product
{
	public $name;
	public $price;

	public function __construct ($name, $price)
	{
		$this->name = $name;
		$this->price = $price;
	}

	public function getName ()
	{
	    return $this->name;
	}

	public function getPrice ()
	{
	    return $this->price;
	}

	public function getProductInfo()
	{
	    return "Product Info:\n\nName: {$this->name}\nPrice: {$this->price}\n";
	}
}