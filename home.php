<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LANEIGE Skincare & Make-up</title>
    <link rel="stylesheet" href="homepage.css">
    <link href="https://unpkg.com/boxicons/css/boxicons.min.css" rel="stylesheet">
    <style>
 
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }


        header {
            background-color: #FF369B;
            color: white;
            padding: 20px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
            color: black; 
        }

        .menu a {
            margin-right: 20px;
            color: white;
            text-decoration: none;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-left: 10px;
        }

        
        .hero {
            background-image: url('IMG/fotojahome33.jpg');
            background-size: cover;
            background-position: center;
            height: 400px;
            border-radius: 50px;
            padding: 20px;
            margin: 0 0; 
            display: flex;
            justify-content: flex-start; 
            align-items: center;
            color: rgb(189, 8, 221);
            text-align: left;
        }

        .hero-text-left {
            width: 60%; 
            padding: 0 40px; 
            color: rgb(189, 8, 221);
        }

        .hero-text-left h2 {
            font-size: 30px;
            margin-bottom: 10px;
        }

   
        .slider-container {
            position: relative;
            width: 100%;
            height: 400px;
            overflow: hidden;
            border-radius: 10px;
        }

        .slider-images {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slider-images img {
            width: 20%; 
            height: 100%;
            object-fit: cover;
            flex-shrink: 0;
            border-radius: 15px; 
            border: 3px solid rgb(242, 208, 225); 
        }

        .slider-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .prev, .next {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px;
            cursor: pointer;
        }

 
        footer {
            background-color: #FF369B; 
            color: white;
            text-align: center;
            padding: 1px 0; 
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
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


    <section class="slider-container">
        <div class="slider-images">
            <img src="IMG/home1.webp" alt="Image 1">
            <img src="IMG/home2.webp" alt="Image 2">
            <img src="IMG/home3.webp" alt="Image 3">
            <img src="IMG/home4.webp" alt="Image 4">
            <img src="IMG/home5.webp" alt="Image 5">
            <img src="IMG/home6.webp" alt="Image 6">
            <img src="IMG/home7.webp" alt="Image 7">
            <img src="IMG/home8.webp" alt="Image 8">
            <img src="IMG/home9.webp" alt="Image 9">
        </div>
        <div class="slider-nav">
            <span class="prev">&#10094;</span>
            <span class="next">&#10095;</span>
        </div>
    </section>


    <footer>
        <p>&copy; 2024 Products. All rights reserved.</p>
    </footer>

    <script>
    let index = 0;
    const images = document.querySelectorAll('.slider-images img');
    const prev = document.querySelector('.prev');
    const next = document.querySelector('.next');

    function showSlide() {
        const totalImages = images.length;
        if (index >= totalImages) {
            index = totalImages - 1; 
        }
        if (index < 0) {
            index = 0; 
        }
        document.querySelector('.slider-images').style.transform = `translateX(-${index * 20}%)`;
    }

    prev.addEventListener('click', () => {
        index--;
        showSlide();
    });

    next.addEventListener('click', () => {
        index++;
        if (index >= images.length) { 
            index = 0;
        }
        showSlide();
    });

    setInterval(() => {
        index++;
        if (index >= images.length) { 
            index = 0;
        }
        showSlide();
    }, 5000);
    </script>
    <script src="dropdown.js"></script>

</body>
</html>