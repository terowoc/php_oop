<?php

require 'vendor/autoload.php';

use App\Interfaces\IGadget;
use App\{BookProduct, NoteBookProduct};

function offerCase(IGadget $product)
{
	print("We offer a case for the gadget: {$product->getName()}");
}

$book = new BookProduct('Gogol', 100, 2345);
$book->setDiscount(30);
$bookInfo = $book->getProductInfo();

$notebook = new NoteBookProduct('Hp', 1100, 'Intel Core i7');
$notebook->setDiscount(10);
$notebook->setColor('red');
$notebookInfo = $notebook->getProductInfo();

var_dump($notebook);