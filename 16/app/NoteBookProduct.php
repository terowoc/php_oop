<?php

namespace App;

use App\Interfaces\IGadget;
use App\Traits\Color;

class NoteBookProduct extends Product implements IGadget
{
	use Color;

	public $cpu;

	public function __construct($name, $price, $cpu)
	{
		parent::__construct($name, $price);
	    $this->cpu = $cpu;
	}

	public function getCpu ()
	{
	    return $this->cpu;
	}

	public function getProductInfo ()
	{
		$out = parent::getProductInfo();
		$out .= "Type: Notebook\nCpu: {$this->cpu}";

		return $out;
	}

	public function addProduct($name, $price, $numPages = 0) {

	}

	public function getCase()
	{
	    
	}
}