<?php

namespace App;

use App\Interfaces\I3D;

class BookProduct extends Product implements I3D
{
	public $numPages;
	public $action1;
	public $action2;

	public function __construct($name, $price, $numPages)
	{
		parent::__construct($name, $price);
	    $this->numPages = $numPages;
	}

	public function __toString()
	{
		return $this->getProductInfo();
	}

	public function __get($name)
	{
	    var_dump($name);
	}

	public function __set($name, $value)
	{
	    var_dump($name, $value);
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

	public function doAction1()
	{
	    print($this->action1 = "Action 1\n");
	    return $this;
	}

	public function doAction2()
	{
	    print($this->action2 = "Action 2\n");
	}
}