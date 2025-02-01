<?php
require 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admindashboard.css">
    <link href="https://unpkg.com/boxicons/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <h2>Admin Dashboard</h2>
            <ul>
                <li>
                    <a href="admindashboard.php?page=users" class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'users') ? 'active' : ''; ?>">
                        <i class='bx bx-user'></i> Users
                    </a>
                </li>
                <li>
                    <a href="admindashboard.php?page=products" class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'products') ? 'active' : ''; ?>">
                        <i class='bx bx-box'></i> Products
                    </a>
                </li>
                <li>
                    <a href="logout.php"><i class='bx bx-log-out'></i> Logout</a>
                </li>
            </ul>
        </aside>

        <main class="main-content">
            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];

                if ($page == 'users') {
                    include 'adminusers.php';
                } 
               
                elseif ($page == 'products') {
                    include 'adminproducts.php'; 
                } 
               
                else {
                    echo "<h1>Page Not Found</h1>";
                }
            } else {
              
                echo '
                <h1>Welcome to the Admin Dashboard</h1>
                <h2>Welcome, Admin!</h2>
                <p>Here you can manage users, products, and all the content on your website. You have full control over everything, making it easy to keep your site running smoothly.</p>';
            }
            ?>
        </main>
    </div>
</body>
</html>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
}

.dashboard-container {
    display: flex;
}

.sidebar {
    width: 250px;
    background-color: #FF369B;
    color: white;
    height: 100vh;
    padding: 20px;
}

.sidebar h2 {
    text-align: center;
    margin-bottom: 30px;
}

.sidebar ul {
    list-style: none;
}

.sidebar ul li {
    margin: 20px 0;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: background-color 0.3s;
}

.sidebar ul li a:hover, .sidebar ul li a.active {
    background-color: #34495e;
}

.main-content {
    flex: 1;
    padding: 20px;
    background-color: #f4f4f4;
}

.main-content h1 {
    margin-bottom: 30px;
}

.add-user-button {
    display: inline-block;
    margin-bottom: 15px;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s;
}

.add-user-button:hover {
    background-color: #45a049;
}

.user-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.user-table th, .user-table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

.user-table th {
    background-color: #f4f4f4;
    font-weight: bold;
}

.user-table tr:nth-child(even) {
    background-color: #f9f9f9;
}

.user-table tr:hover {
    background-color: #f1f1f1;
}

.action-button {
    padding: 5px 10px;
    text-decoration: none;
    border-radius: 3px;
    font-size: 14px;
    font-weight: bold;
    color: #fff;
}

.action-button.edit {
    background-color: #007BFF;
}

.action-button.edit:hover {
    background-color: #0056b3;
}

.action-button.delete {
    background-color: #FF4B4B;
}

.action-button.delete:hover {
    background-color: #d63030;
}
</style>