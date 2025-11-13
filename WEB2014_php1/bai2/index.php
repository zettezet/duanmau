<?php
include "Animal.php";
include "Dog.php";
require_once "Person.php";
require_once "Student.php";

$animal1 = new Animal("Cau vang", "Vang", 21);
$animal1->run();

$animal2 = new Animal("Cun cung", "Den", 9);
$animal2->run();

$dog = new Dog("Scupodu", "Vang", 50);
$dog->run();

$student = new Student('PH60473', 'Hoang Duc Tue','02/11/2006', 'Bac Ninh', 'Nam', 'dtue68@gmail.com', 10);
$student->info();