<?php
require 'database.php'; 

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    
    $delete_sql = "DELETE FROM users WHERE id = $id";
    if ($conn->query($delete_sql)) {
        header('Location: admindashboard.php');
        exit();
    } else {
        die("Error deleting user: " . $conn->error);
    }
} else {
    die("Invalid request.");
}
?>