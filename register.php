<?php
require_once 'registerController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Register</title>
</head>
<body>

<div class="form-container">
    <h2>Register</h2>
    <form id="registerForm" action="register.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Create a password" required>

        <div class="form-actions">
            <button type="submit">Register</button>
            <a href="login.php" class="back-to-login">Back to Login</a>
        </div>
    </form>
</div>

<script src="register.js"></script>

</body>
</html>
