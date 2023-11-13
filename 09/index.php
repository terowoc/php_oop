<?php

require_once 'classes/Product.php';
require_once 'classes/I3D.php';
require_once 'classes/BookProduct.php';

$book = new BookProduct('Gogol', 100, 2345);
$book->setDiscount(30);
$bookInfo = $book->getProductInfo();

print($bookInfo);
print("\n\n");
$book->addProduct('test', 345, 34534);
print("\n\n");
$book->test();

# Error
// $product = new Product('test', 1234);
// var_dump($product);