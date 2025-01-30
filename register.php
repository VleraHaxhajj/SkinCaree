<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LANEIGE Skincare & Make-up</title>
    <link rel="stylesheet" href="register.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <a href="homepage.html"><i class='bx bx-arrow-back'></i></a>
    </header>
    <div class="form-container">

    <?php

    include_once 'database.php';
    include_once 'user.php';


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $db = new Database ();
        $connection = $db->getConnection();
        $user = new User ($connection);

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        if($user->register($name,$email,$password)){
            header("Location: login.php");
            exit;
        }else{
            echo "Error registering user!";
        }
    }

?>
        <h2>Register</h2>
     <form id="registerForm" action="register.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Enter your name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Enter your email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Create a password" required>

    <div class="form-actions">
        <button type="submit" name="register">Register</button>
        <a href="login.html" class="back-to-login">Back to Login</a>
    </div>
    </form>
    </div>
    <script src="register.js"></script>
</body>
</html>
