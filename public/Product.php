<?php

class Product
{
    private $name;

    private $price;

    private $stock;
    
    public $inStock;
    
    public function __construct($name, $price, $inStock = true)
    {
        $this->name = $name;
        $this->price = $price;
        $this->inStock = $inStock;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function addStock($quantity)
    {
        $this->stock += $quantity;
    }

    public function purchase($quantity)
    {
        if ($this->stock >= $quantity) {
            $this->stock -= $quantity;   
        }
    }
}

$product1 = new Product("Laptop", 999.99);
$product2= new Product("Phone", 599.99, false);

var_dump($product1->inStock);
