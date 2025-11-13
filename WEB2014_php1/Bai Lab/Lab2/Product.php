<?php
class Product {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName() { return $this->name; }
    public function getPrice() { return $this->price; }

    public function setName($name) { $this->name = $name; }
    public function setPrice($price) { $this->price = $price; }

    public function info() {
        echo "Product: {$this->name}, Price: {$this->price}<br>";
    }
}

class Book extends Product {
    private $author;

    public function __construct($name, $price, $author) {
        parent::__construct($name, $price);
        $this->author = $author;
    }

    public function getAuthor() { return $this->author; }
    public function setAuthor($author) { $this->author = $author; }

    public function info() {
        echo "Book: " . $this->getName() . ", Price: " . $this->getPrice() . ", Author: {$this->author}<br>";
    }
}

class Clothes extends Product {
    private $size;

    public function __construct($name, $price, $size) {
        parent::__construct($name, $price);
        $this->size = $size;
    }

    public function getSize() { return $this->size; }
    public function setSize($size) { $this->size = $size; }

    public function info() {
        echo "Clothes: " . $this->getName() . ", Price: " . $this->getPrice() . ", Size: {$this->size}<br>";
    }
}

$book = new Book("Lap trinh", 150000, "Hoang Duc Tue");
$book->info();

$clothes = new Clothes("Ao thun", 200000, "L");
$clothes->info();
