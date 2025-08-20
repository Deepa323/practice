<?php

class User {
    public $name;
    public $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getUserInfo() {
        return "Name: {$this->name}, Email: {$this->email}<br>";
    }
}

class Admin extends User {
    public $role = "Admin";

  
    public function getRole() {
        return "Role: {$this->role}<br>";
    }
}

class Editor extends User {
    public $role = "Editor";

    public function getRole() {
        return "Role: {$this->role}<br>";
    }
}


$admin = new Admin("Deepa", "deepa@example.com");
$editor = new Editor("Rahul", "rahul@example.com");


echo "<h2>PHP Inheritance Example</h2>";
echo $admin->getUserInfo();
echo $admin->getRole();
echo "<hr>";
echo $editor->getUserInfo();
echo $editor->getRole();
?>
