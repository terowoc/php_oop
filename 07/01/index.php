<?php

require_once 'classes/Product.php';

$product1 = new Product('Gogol', 300, null, 1534);
$productInfo1 = $product1->getProductInfo();

print($productInfo1);
print("\n\n-------------------\n\n");

$product2 = new Product('Hp', 9000, 'Intel core i7');
$productInfo2 = $product2->getProductInfo();

print($productInfo2);