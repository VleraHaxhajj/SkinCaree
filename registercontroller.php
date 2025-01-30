<?php

include_once 'userR.php';
include_once 'useer.php';

if(isset($_POST['registerBtn'])){

    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password'])) {
        echo "Fill in all fields!";

    }else{

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $id = $name . rand(100,999);

        $user = new user ($id, $name, $email, $password);

        $userRepository = new userR ();

        $userRepository->insertUser($user);
    }

}

?>