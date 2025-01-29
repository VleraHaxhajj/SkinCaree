<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LANEIGE Skincare & Make-up</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <a href="homepage.html"><i class='bx bx-arrow-back'></i></a>
    </header>
    <div class="wrapper">
        <?php
        if(isset($_POST["login"])){
            $name = $_POST ["name"];
            $password = $_POST ["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE username = ?";
            $stmt = mysqli_stmt_init($conn);
            if(mysqli_stmt_prepare($stmt,$sql)){
                mysqli_stmt_bind_param($stmt , "s" , $name);
                mysqli_stmt_execute($stmt);
                $result + mysqli_stmt_get_result($stmt);
                $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

                if($user){
                    if(password_verify($password,$user[password])){
                        header("Location:index.php");
                        die();

                    }else{
                        echo"<div class='alert alert-danger'>Password does not match</div>";
                    }

                    }else{
                        echo"<div class='alert alert-danger'>Username doesn not match</div>";
                    }

                }else{
                    echo"<div class='alert alert-danger>This username does not exist</div>";
                }
        }
         ?>
         
        <h1>Login</h1>
        <div class="input-box">
            <input type="text" id="name" placeholder="Enter your email" required>
        </div>
        <div class="input-box">
            <input type="password" id="password" placeholder="Enter your password" required>
        </div>
        <div class="remember-forgot">
            <label><input type="checkbox">Remember me</label>
            <a href="#">Forgot password?</a>
        </div>
        <button type="submit" class="buton">Login</button>
        <div class="register-link">
            <p>Don't have an account?
                <a href="register.html">Register</a>
            </p>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>