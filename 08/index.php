<?php

require_once 'classes/Product.php';
require_once 'classes/BookProduct.php';

$book = new BookProduct('Gogol', 100, 2345);
$book->setDiscount(30);
$bookInfo = $book->getProductInfo();

print($bookInfo);
