<?php
class Student {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age  = $age;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    public function setAge($age) {
        if ($age < 0) {
            echo "Tuổi không hợp lệ!<br>";
        } else {
            $this->age = $age;
        }
    }

    public function info() {
        echo "Student: {$this->name}, Age: {$this->age}<br>";
    }
}

$stu = new Student("Hoang Duc Tue", 19);
$stu->info();

$stu->setName("Nguyễn Văn A");
$stu->setAge(9);
$stu->info();
$stu->setAge(-9);
