<?php

require_once 'classes/Product.php';
require_once 'classes/I3D.php';
require_once 'classes/IGadget.php';
require_once 'classes/BookProduct.php';
require_once 'classes/NoteBookProduct.php';

function offerCase(IGadget $product){
	print("We offer a case for the gadget: {$product->getName()}");
}

$book = new BookProduct('Gogol', 100, 2345);
$book->setDiscount(30);
$bookInfo = $book->getProductInfo();

$notebook = new NoteBookProduct('Hp', 1100, 'Intel Core i7');
$notebook->setDiscount(10);
$notebookInfo = $notebook->getProductInfo();

print($bookInfo);
print("\n\n");
print($notebookInfo);
print("\n\n");
offerCase($notebook);
// var_dump($book instanceof BookProduct);
// var_dump($notebook instanceof NotebookProduct);
// var_dump($notebook instanceof Product);