<?php

require_once 'vendor/autoload.php';

use Product\Apparel;
use Product\Book;

$instance = new Apparel();
$instance->setProductName('Pant');
$instance->setProducerCompany('Nike');
$instance->setPrice(650);
// Set discount in dollars
$instance->setDiscount(25);
$instance->setColor('blue');
$instance->setSize('M');
$instance->setMaterial('Cotton');

var_dump($instance);
echo $instance->getPrice();

$book = new Book();
$book->setProductName('Assembler in examples');
$book->setProducerCompany('Computer Press');
$book->setAuthor('Rudolf Marek');
$book->setIsbn('5-94387-232-9');
$book->setPrice(100);
// Set discount in percents
$book->setDiscount(5);

var_dump($book);
echo $book->getPrice();