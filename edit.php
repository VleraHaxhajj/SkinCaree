<?php
require 'database.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $user_sql = "SELECT * FROM users WHERE id = $id";
    $user_result = $conn->query($user_sql);

    if ($user_result && $user_result->num_rows === 1) {
        $user = $user_result->fetch_assoc();
    } else {
        die("User not found.");
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);
    $name = $_POST['name'];
    $email = $_POST['email'];

    
    $update_sql = "UPDATE users SET name = '$name', email = '$email' WHERE id = $id";
    if ($conn->query($update_sql)) {
        header('Location: admindashboard.php');
        exit();
    } else {
        die("Error updating user: " . $conn->error);
    }
} else {
    die("Invalid request.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="admindashboard.css">
</head>
<body>
    <form method="POST" action="edit.php">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>

        <button type="submit">Update User</button>
    </form>
</body>
</html>
