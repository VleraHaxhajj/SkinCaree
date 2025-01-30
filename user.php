<?php

class user{
    private $conn;
    private $table_name = 'user';
    
    public function __construct($db) {
        $this->conn = $db;
    }

    public function register($name, $email, $password){
        $query = "INSERT INTO {$this->table_name} (name,email,password) VALUES (:name, :email, :password)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', password_hash($password, PASSWORD_DEFAULT));

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function login($email, $password){
        $query = "SELECT id, name, email, password FROM {$this->table_name} WHERE email= :email";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0){
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if(password_verify($password, $row['password'])) {

                session_start();
                $_SESSION['user_id']=$row['id'];
                $_SESSION['email']=$row['email'];
                return true;
            }
        }
        return false;
    }
}

?>
