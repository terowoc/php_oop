<?php

require_once 'classes/Product.php';
require_once 'classes/BookProduct.php';
require_once 'classes/NoteBookProduct.php';

$book = new BookProduct('Gogol', 300, 2345);
$bookInfo = $book->getProductInfo();

$notebook = new NoteBookProduct('Hp', 9000, 'Intel Core i7');
$notebookInfo = $notebook->getProductInfo();

print($bookInfo);
print("\n\n-------------------\n\n");
print($notebookInfo);