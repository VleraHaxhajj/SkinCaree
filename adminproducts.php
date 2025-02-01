<?php
require 'database.php'; 


if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql); 

if (!$result) {
    die("Error retrieving products: " . mysqli_error($conn)); 
}
?>

<h1>Manage Products</h1>
<a href="addproduct.php" class="add-user-button">Add New Product</a>
<table class="user-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <?php if (mysqli_num_rows($result) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['id']); ?></td>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['price']); ?></td>
                    <td><?php echo htmlspecialchars($row['description']); ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No products found.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php

mysqli_close($conn);
?>