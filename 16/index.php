<?php

require 'vendor/autoload.php';

use App\BookProduct;

$book = new BookProduct('Gogol', 100, 2345);
$a = \App\A::getInstance();