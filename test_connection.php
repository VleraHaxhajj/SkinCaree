<?php

include_once 'Databaseconnect.php';

$db = new Databaseconnect();

$conn = $db->startConnection();


if ($conn) {
    echo "Database connection success";
}else{
    echo "Database connection failed";
}
?>
