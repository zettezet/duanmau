<?php
class Employee {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName() { return $this->name; }
    public function getSalary() { return $this->salary; }

    public function setName() { $this->name = $name; }
    public function setSalary() { $this->salary = $salary; }

    public function info() {
        echo "Employee: {$this->name}, Salary: " . ($this->salary) . "<br>";
    }
}

class Manager extends Employee {
    private $bonus;

    public function __construct($name, $salary, $bonus) {
        parent::__construct($name, $salary);
        $this->bonus = $bonus;
    }

    public function getBonus() { return $this->bonus; }
    public function setBonus() { $this->bonus = $bonus; }

    public function info() {
        echo "Manager: " . $this->getName() . ", Salary: " . ($this->getSalary()) . ", Bonus: " . ($this->bonus) . "<br>";
    }
}

$emp = new Employee("Lan", 5000000);
$emp->info();

$mgr = new Manager("Hieu", 10000000, 2000000);
$mgr->info();
