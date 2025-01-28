<?php

$hostname = "localhost";
$dbUser = "root";
$password = "";
$dbName = "skincare";
$conn = mysqli_connect($hostName, $dbUser, $password, $dbName);
if(!$conn) {
    die("Something went wrong");
}
?>