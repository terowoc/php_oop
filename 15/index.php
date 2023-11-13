<?php

require 'vendor/autoload.php';

use App\BookProduct;

$book = new BookProduct('Gogol', 100, 2345);
print($book);
$book->test = 'TEEEEEEEEEST';
$book->test;