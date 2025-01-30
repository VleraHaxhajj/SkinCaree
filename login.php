<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LANEIGE Skincare & Make-up</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>
<body>
    <header>
        <a href="homepage.html"><i class='bx bx-arrow-back'></i></a>
    </header>
    <div class="wrapper">

        <?php
          
          include_once 'Database.php';
          include_once 'User.php';
     
         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $db = new Database();
         $connection = $db->getConnection();
         $user = new User($connection);
     
         
         $email = $_POST['email'];
         $password = $_POST['password'];


         if ($user->login($email, $password)) {
            echo '<script>toastr.success("Login successful!");</script>';
         }

         if($user->emailExists($email)){
            if($user->login($email,$password)){
                session_start();
                $_SESSION['user_email'] = $email;
                header("Location: homepage.html");
                exit;
            }else{
                echo '<script>toastr.error("Incorrect password!");</script>';
            }
         }else{
            echo'<script>Swal.fire("Error", "User not registered!", "error");</script>';
         }
     }
   
        ?>

    <form action="login.php" method="POST">
        <h1>Login</h1>
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
           <p> <>Don't have an account?<a href="register.html">Register</a></p> 
        </div>
    </div>
    </form>
    <script src="login.js"></script>
</body>
</html>


