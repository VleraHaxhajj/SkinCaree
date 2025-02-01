<?php
class DatabaseConnection {
    private $connection;

    public function __construct() {
        
        $servername = "localhost";
        $username = "root";  
        $password = "";  
        $dbname = "projekti";  

     
        $this->connection = new mysqli($servername, $username, $password, $dbname);

        
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    
    public function getConnection() {
        return $this->connection;
    }

    
    public function prepare($query) {
        return $this->connection->prepare($query);
    }
}
?>