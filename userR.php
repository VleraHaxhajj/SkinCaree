<?php

include_once 'Databaseconnect.php';


class userR {
    private $connection; 

   
    function __construct() {
        $conn = new Databaseconnect(); 
        $this->connection = $conn->startConnection(); 
    }


    function insertUser($user) {
        $conn = $this->connection;

   
        $id = $user->getId();
        $name = $user->getName();
        $email = $user->getEmail();
        $password = $user->getPassword();

   
        $sql = "INSERT INTO user (id, name, email,  password) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql); 

   
        $statement->execute([$id, $name,  $email,  $password]);

       
        echo "<script> alert('User has been inserted successfully!'); </script>";
    }

    function getAllUsers() {
        $conn = $this->connection;

        $sql = "SELECT * FROM user";

        $statement = $conn->query($sql); 
        $users = $statement->fetchAll(); 

        return $users; 
    }

    
    function getUserById($id) {
        $conn = $this->connection;

     
        $sql = "SELECT * FROM user WHERE id='$id'";

        $statement = $conn->query($sql); 
        $user = $statement->fetch(); 

        return $user;
    }

    
    function updateUser($id, $name, $email, $password) {
        $conn = $this->connection;


        $sql = "UPDATE user SET name=?, email=?, password=? WHERE id=?";

        $statement = $conn->prepare($sql); 

      
        $statement->execute([$name,$email,$password, $id]);

      
        echo "<script>alert('Update was successful');</script>";
    }

    
    function deleteUser($id) {
        $conn = $this->connection;

      
        $sql = "DELETE FROM user WHERE id=?";

        $statement = $conn->prepare($sql); 

       
        $statement->execute([$id]);

       
        echo "<script>alert('Delete was successful');</script>";
    }
}


?>
