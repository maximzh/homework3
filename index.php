<?php

require_once 'vendor/autoload.php';

use Product\Apparel;

$instance = new Apparel();
$instance->setProductName('Pant');
$instance->setProducerCompany('Nike');
$instance->setPrice(650);
$instance->setDiscount(25);
$instance->setColor('blue');
$instance->setSize('M');
$instance->setMaterial('Cotton');

var_dump($instance);
echo $instance->getPrice();
