<?php

namespace App;

class A
{
	private static $instance;

    private function __construct()
    {
        print(111111111111111);
    }

    public static function getInstance()
    {
    	if (null === static::$instance) {
    		static::$instance = new static();
    	}

    	return static::$instance;
    }
}
