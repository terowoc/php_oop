<?php

namespace Classes;

use Classes\Interfaces\I3D;

class BookProduct extends Product implements I3D
{
	public $numPages;

	public function __construct($name, $price, $numPages)
	{
		parent::__construct($name, $price);
	    $this->numPages = $numPages;
	}

	public function test()
	{
		var_dump(self::TEST2);
	}

	public function getNumPages()
	{
	    return $this->numPages;
	}

	public function getProductInfo()
	{
		$out = parent::getProductInfo();
		$out .= "Original Price: {$this->price}\n";
		$out .= "Type: Book\n";
		$out .= "Pages: {$this->numPages}";

		return $out;
	}

	public function addProduct($name, $price, $numPages = 0) 
	{
		var_dump($name);
		var_dump($price);
		var_dump($numPages);
	}
}