<?php
/**
 * Created by PhpStorm.
 * User: fumus
 * Date: 21.10.15
 * Time: 20:35
 */
namespace Product;

use Price\PriceInterface;

class Book extends AbstractProduct implements PriceInterface
{
    protected $isbn;
    protected $author;

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function getPrice()
    {
        $pr = $this->price;

        if ($this->discount) {
            $pr = $pr - ($this->discount) * $pr / 100;
        }

        return $pr;
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function iterateObject()
    {
        echo "This is the instance of " . __CLASS__ . " <br />";
        parent::iterateObject();
    }
}
