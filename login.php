<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <style>
        .error-message {
            color: red;
            font-size: 14px;
            margin-bottom: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="wrapper">
<?php
require_once 'DatabaseConnection.php';
require_once 'UserRepository.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new DatabaseConnection();
    $userRepo = new UserRepository($db);
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = $userRepo->getUserByEmail($email);

    if (!$user) {
        $error = 'Please register first.';
    } elseif (!password_verify($password, $user['password'])) {
        $error = 'Incorrect email or password.';
    } else {
        $_SESSION['user'] = $user;
        if ($user['role'] == 'admin') {
            header("Location: admindashboard.php");
        } else {
            header("Location: home.php");
        }
        exit();
    }
}
?>

    <form action="login.php" method="POST">
        <h1>Login</h1>
        <?php if (!empty($error)): ?>
            <div class="error-message"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        <div class="input-box">
            <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="input-box">
            <input type="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="remember-forgot">
            <label><input type="checkbox">Remember me</label>
            <a href="#">Forgot password?</a>
        </div>
        <button type="submit" class="buton">Login</button>
        <div class="register-link">
           <p>Don't have an account?<a href="register.html"> Register</a></p> 
        </div>
    </form>
</div>

</body>
</html>


