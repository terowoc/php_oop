<?php

namespace Classes;

abstract class Product
{
	private $name;
	protected $price;
	public $discount = 10;

	public function __construct($name, $price)
	{
		$this->name = $name;
		$this->price = $price;
	}

	public function getName()
	{
	    return $this->name;
	}

	public function getPrice()
	{
	    return $this->price - ($this->discount / 100 * $this->price);
	}

	public function getDiscount(): int
	{
		return $this->discount;	
	}

	public function setDiscount(int $discount)
	{
	    $this->discount = $discount;
	}

	public function getProductInfo()
	{
	    return "Product Info:\n\nName: {$this->name}\nPrice: {$this->getPrice()}\n";
	}

	abstract protected function addProduct($name, $price);
}