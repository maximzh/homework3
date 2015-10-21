<?php
/**
 * Created by PhpStorm.
 * User: fumus
 * Date: 21.10.15
 * Time: 18:53
 */

namespace Product;


abstract class AbstractProduct
{
    protected $price;
    protected $discount;
    protected $productName;
    protected $producerCompany;

    abstract public function getProductName();

    abstract public function setProductName($name);

    abstract public function getProducerCompany();

    abstract public function setProducerCompany($company);
}