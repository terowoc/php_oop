<?php

class NoteBookProduct extends Product
{
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
}