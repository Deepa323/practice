<?php

interface Logger {
    public function log($message); 
}

interface FileHandler {
    public function saveToFile($filename, $data);
}
class FileLogger implements Logger, FileHandler {
    public function log($message) {
        echo "Logging message: $message <br>";
    }

    public function saveToFile($filename, $data) {
        
        echo "Saving '$data' to file: $filename <br>";
    }
}


$logger = new FileLogger();
$logger->log("User login successful");
$logger->saveToFile("log.txt", "User login successful");
?>
