<?php
require 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

   
    $sql = "INSERT INTO products (name, price, description) VALUES ('$name', '$price', '$description')";

    if (mysqli_query($conn, $sql)) {
        
        header("Location: admindashboard.php?page=products&message=ProductAdded");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
</head>
<body>

<h1>Add New Product</h1>

<form method="POST" action="">
    <label for="name">Product Name:</label>
    <input type="text" name="name" required><br><br>
    
    <label for="price">Product Price:</label>
    <input type="text" name="price" required><br><br>
    
    <label for="description">Product Description:</label>
    <textarea name="description" required></textarea><br><br>
    
    <button type="submit">Add Product</button>
</form>

</body>
</html>