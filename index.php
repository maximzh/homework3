<?php

require_once 'vendor/autoload.php';

use Product\Apparel;
use Product\Book;

$pant = new Apparel();
$pant->setProductName('Pant');
$pant->setProducerCompany('Nike');
$pant->setPrice(65);
// Set discount in dollars
$pant->setDiscount(15);
$pant->setColor('blue');
$pant->setSize('M');
$pant->setMaterial('Cotton');

$pant->iterateObject();
echo 'Price with discount: ' . $pant->getPrice() . '<br />';
echo '<br />';

$book = new Book();
$book->setProductName('Assembler in examples');
$book->setProducerCompany('Computer Press');
$book->setAuthor('Rudolf Marek');
$book->setIsbn('5-94387-232-9');
$book->setPrice(12);
// Set discount in percents
$book->setDiscount(5);

$book->iterateObject();
echo 'Price with discount: ' . $book->getPrice() . '<br />';
