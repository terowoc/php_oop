<?php

use classes\interfaces\IGadget;
use classes\BookProduct;
use classes\NoteBookProduct;

// require_once 'classes/Product.php';
// require_once 'classes/I3D.php';
// require_once 'classes/IGadget.php';
// require_once 'classes/BookProduct.php';
// require_once 'classes/NoteBookProduct.php';

function autoloader1($class)
{
	// $file = __DIR__ . "/classes/{$class}.php";
	$class = str_replace("\\", '/', $class);
	$file = __DIR__ . "/{$class}.php";
	if (file_exists($file)) {
		require_once $file;
	}
}

// function autoloader2($class)
// {
// 	$file = __DIR__ . "/classes/interfaces/{$class}.php";
// 	if (file_exists($file)) {
// 		require_once $file;
// 	}
// }

spl_autoload_register('autoloader1');
// spl_autoload_register('autoloader2', true, true);

function offerCase(IGadget $product)
{
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