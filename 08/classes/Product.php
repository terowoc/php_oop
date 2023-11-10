<?php

class Product
{
	private $name;
	protected $price;
	public $discount = 10;

	// public $public = 'PUBLIC';
	// protected $protected = 'PROTECTED';
	// private $private = 'PRIVATE';

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
	    return $this->price - ($this->discount / 100 * $this->price);
	}

	public function getProductInfo()
	{
	    return "Product Info:\n\nName: {$this->name}\nPrice: {$this->getPrice()}\n";
	}
}