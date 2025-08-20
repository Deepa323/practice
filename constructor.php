<?php

class User {
    public $name;
    public $email;
    public $role;

   
    public function __construct($name, $email, $role = "Guest") {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }

    
    public function getUserInfo() {
        return "Name: {$this->name}<br>Email: {$this->email}<br>Role: {$this->role}<hr>";
    }
}


$user1 = new User("Deepa", "deepa@example.com", "Admin");
$user2 = new User("Rahul", "rahul@example.com"); // role defaults to Guest
$user3 = new User("Anita", "anita@example.com", "Editor");


echo "<h2>PHP Constructor Example</h2>";
echo $user1->getUserInfo();
echo $user2->getUserInfo();
echo $user3->getUserInfo();
?>
