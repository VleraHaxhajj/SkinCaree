<?php

$userId = $_GET['id'];

include_once 'userR.php';

$userR= new userR();

$userR ->deleteUser(($userId));

header("location:dashboard.php");



?>