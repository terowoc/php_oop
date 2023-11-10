<?php

class Product
{
	public $name;
	public $price;

	public $cpu;
	public $numPages;

	public function __construct ($name, $price, $cpu = null, $numPages = null)
	{
		$this->name = $name;
		$this->price = $price;
		$this->cpu = $cpu;
		$this->numPages = $numPages;
	}

	public function getCpu ()
	{
	    return $this->cpu;
	}

	public function getNumPages ()
	{
		return $this->numPages;
	}

	public function getProductInfo()
	{
	    $out = "Product Info:\n\nName: {$this->name}\nPrice: {$this->price}\n";

	    if (! is_null($this->numPages)) {
	    	$out .= "Type: Book\nPages: {$this->numPages}";
	    }

	    if (! is_null($this->cpu)) {
	    	$out .= "Type: Notebook\nCpu: {$this->cpu}";
	    }

	    return $out;
	}
}