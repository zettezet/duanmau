<?php -->

class Student extends Person{
    protected $id;
    protected $gender;
    protected $email;
    protected $point;

    public function __construct($id, $name, $birthday, $address, $gender, $email, $point) {
        parent::__construct($name, $birthday, $address);
        $this->id = $id;
        $this->gender = $gender;
        $this->email = $email;
        $this->point = $point;
    }
    // Hien thi thong tin sinh vien
    public function info(){
        echo "ID: $this->id <br>";
        echo "Name: $this->name <br>";
        echo "Address: $this->address <br>";
        echo "Email: $this->email <br>";
        echo "Gender: $this->gender <br>";
        echo "Birthday: $this->birthday <br>";
        echo "Point: $this->point <br>";
    }
} -->