<?php
session_start();
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}
else{
    header("location:login.php"); 
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        /* Navigation Bar */
        .navbar {
            height: 60px;
            background-color: #222;
            display: flex;
            align-items: center;
            padding: 0 30px;
        }

        .navbar .logo {
            color: white;
            font-size: 22px;
            font-weight: bold;
            margin-right: auto;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 20px 15px;
            transition: 0.3s;
        }

        .navbar a:hover {
            background-color: #444;
        }

        .logout {
            background-color: #e74c3c;
        }

        .logout:hover {
            background-color: #c0392b !important;
        }

        /* Page Content */
        .content {
            padding: 40px;
        }
    </style>
</head>

<body>

    <nav class="navbar">

        <div class="logo">
            My Website
        </div>

        <a href="home.php">Home</a>
        <a href="contact.php">Contact</a>
        <a href="id.php">ID</a>
        <a href="logout.php" id="logout" name ="logout">Logout</a>

    </nav>

    <div class="content">
        <h1>Hello <?php echo $username; ?></h1>
    </div>

</body>
</html>