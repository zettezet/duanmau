<?php

class Person{
    protected $name;
    protected $birthday;
    protected $address;

    public function __construct($name, $birthday, $address){
        $this->name = $name;
        $this->birthday = $birthday;
        $this->address = $address;
    }
}