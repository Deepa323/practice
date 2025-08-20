<?php
class Database {
    private $connection;

   
    public function __construct() {
        echo "Connecting to database...";
        $this->connection = "Connected!";
    }

  
    public function query($sql) {
        echo "Running query: $sql ";
    }

    
    public function __destruct() {
        echo "Closing database connection...";
        $this->connection = null;
    }
}


        $ob = new Database();
$ob->query("SELECT * FROM users");

?>
