<?php

namespace App\Traits;

trait Singleton
{
	private static $instance;

    private function __construct()
    {
        print("111111111111111\n");
    }

    public static function getInstance()
    {
    	if (null === static::$instance) {
    		static::$instance = new static();
    	}

    	return static::$instance;
    }
}