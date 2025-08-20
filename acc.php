<?php
class Person {
    public $name;        
    protected $age;      
    private $salary;     

    public function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function showInfo() {
        return "Name: {$this->name}, Age: {$this->age}, Salary: {$this->salary}<br>";
    }

    protected function getAge() {
        return $this->age;
    }

    private function getSalary() {
        return $this->salary;
    }
}


class Employee extends Person {
    public function showProtected() {
        return "Age from child class: " . $this->age . "<br>";
    }

}


$person = new Person("Deepa", 25, 50000);
echo $person->showInfo(); 

$employee = new Employee("Rahul", 30, 70000);
echo $employee->showProtected(); 

echo "Name directly: " . $employee->name . "<br>";

?>
