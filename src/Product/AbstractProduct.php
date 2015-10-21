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

    public function getProductName()
    {
        return $this->productName;
    }

    public function setProductName($name)
    {
        $this->productName = $name;
    }

    public function getProducerCompany()
    {
        return $this->producerCompany;
    }

    public function setProducerCompany($company)
    {
        $this->producerCompany = $company;
    }
}