<?php

require 'vendor/autoload.php';

use App\Interfaces\IGadget;
use App\{BookProduct, NoteBookProduct};

function offerCase(IGadget $product)
{
	print("We offer a case for the gadget: {$product->getName()}");
}

$book = new BookProduct('Gogol', 100, 2345);
$notebook = new NoteBookProduct('Hp', 1100, 'Intel Core i7');

// $a = new \App\A();
// $b = new \App\B();

// $a->getTest();
// $a->getTest2();
// $b->getTest();
// $b->getTest2();

$book->doAction1()->doAction2();
