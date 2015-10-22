<?php
/**
 * Created by PhpStorm.
 * User: fumus
 * Date: 21.10.15
 * Time: 18:37
 */
namespace Price;

interface PriceInterface
{
    public function getPrice();

    public function setPrice($price);

    public function getDiscount();

    public function setDiscount($discount);
}
