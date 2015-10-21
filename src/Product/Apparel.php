<?php
/**
 * Created by PhpStorm.
 * User: fumus
 * Date: 21.10.15
 * Time: 19:17
 */
namespace Product;

use Price\PriceInterface;

class Apparel extends AbstractProduct implements PriceInterface
{
    protected $size;
    protected $color;
    protected $material;

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        $pr = $this->price;

        if ($this->discount) {
            $pr = $pr - $this->discount;
        }

        return $pr;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setMaterial($material)
    {
        $this->material = $material;
    }

    public function getMaterial()
    {
        return $this->material;
    }
}