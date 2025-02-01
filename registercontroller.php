<?php
require_once 'databaseconnection.php';
require_once 'User.php';
require_once 'UserRepository.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new DatabaseConnection();
    $userRepo = new UserRepository($db);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($userRepo->getUserByEmail($email)) {
        echo "Email already exists!";
    } else {
   
        $user = new User($name, $email, password_hash($password, PASSWORD_DEFAULT)); // Përdor hashing për passwordin
        $userRepo->registerUser($user);
        

        header("Location: login.php");
        exit(); 
    }
}
?>