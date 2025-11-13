<?php
class Animal{
    protected $color;
    private $name;
    public $age;

    //Hàm khởi tạo 
    public function __construct($name, $color, $age){
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
    }

    public function run(){
        echo $this -> name . " Dang chay rat nhanh <br>";
    }
};