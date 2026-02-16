<?php

class Car
{
    public $brand;
    public $color;
    public $year;


    public function start()
    {
        return "The car is starting...";
    }

    public function getDescription()
    {
        return "This is a {$this->color} {$this->brand}";
    }
}

$myCar = new Car();
$myCar->brand = "Mercedes-Benz";
$myCar->color = "black";
$myCar->year = 1991;


echo $myCar->brand;
echo $myCar->color;
echo $myCar->year;


echo sprintf('Brand: %s, Color: %s, Year: %d', $myCar->brand, $myCar->color, $myCar->year);

echo $myCar->start();

echo $myCar->getDescription();

