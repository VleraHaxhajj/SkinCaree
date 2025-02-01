<?php
session_start();


if (!isset($_SESSION['user'])) {

    header("Location: login.php");
    exit(); 
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LANEIGE Skincare & Make-up</title>
    <link rel="stylesheet" href="homepage.css">
    <link href="https://unpkg.com/boxicons/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>LANEIGE</h1>
        <div class="menu">
            <a href="products.html">Products</a>
            <a href="aboutUs.html">About Us</a>
            <a href="contactUs.html">Contact Us</a>
        </div>
        <nav>
            <ul>
                <li><a href="login.html">
                    <i class='bx bx-user-circle'></i>
                </a></li>
                <li class="dropdown">
                    <a href="#" id="menu-icon">
                        <i class='bx bx-dots-vertical-rounded'></i>
                    </a>
                    <div class="dropdown-content" id="dropdown-menu">
                        <a href="logout.php">Log Out</a> 
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <section class="hero">
        <div class="hero-text-left">
            <h2>Black Friday Alert!</h2>
            <p>Don't miss out on our biggest sale of the year!
                Exclusive skincare deals with discounts of up to 50% - only for a limited time!
                Shop now and give your skin the care it deserves!
            </p>
        </div>
    </section>
    <script src="dropdown.js"></script>
</body>
</html>