<?php

class File
{

	public $file_path;
	public $file;

	public function __construct($file)
	{
	    $this->file = $file;
		if (! is_writable($this->file)) {
			print('Error!');
			exit;
		}

		$this->file_path = fopen($this->file, 'a');
	}

	public function __destruct()
	{
		fclose($this->file_path);
	}

	public function write($text)
	{
		if (! fwrite($this->file_path, $text)) {
			print('Error!');
			exit;
		}

		print('Done!');
	}

}