<?php


class Book 
{
    private $title;
    private $author;
    private $year;
    private $price;

    public function __construct($title, $author, $year, $price)
    {
        if ($year <= 1000) {
            throw new Exception("Too old");
        }

        if ($price < 0) {
            throw new Exception("Can't be negative number");
        }

        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->price = $price;
    }

    public function getInfo()
    {
        echo "{$this->title} by {$this->author} ({$this->year}) - {$this->price}";
    }
}

$book = new Book("Clean Code", "Robert C. Martin", 2008, 39.99);
$book->getInfo();
