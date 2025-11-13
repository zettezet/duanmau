<?php
class Animal {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function makeSound(){
        return "Some sound...";
    }
}

class Dog extends Animal {
    public function makeSound(){
        return "Woof! Woof!";
    }
}

$dog = new Dog("Akita");

$dog->setName("Shiba");

echo "Name: " . $dog->getName();
echo "<br> Sound: " . $dog->makeSound();
