<?php
session_start();
if(isset($_SESSION['username'])){
    header('location:Welcome.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f2f2f2;
        }

        .login-box {
            width: 350px;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 25px;
        }

        .input-group {
            margin-bottom: 18px;
        }

        .input-group label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
        }

        .input-group input {
            width: 100%;
            padding: 11px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
        }

        .input-group input:focus {
            outline: none;
            border-color: #333;
        }

        button {
            width: 100%;
            padding: 11px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }

        .signup {
            text-align: center;
            margin-top: 18px;
            font-size: 14px;
        }

        .signup a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="login-box">
        <h2>Login</h2>

        <form action="loginProcess.php" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="username" id="username" name = "username" placeholder="Enter your username" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name = "password" placeholder="Enter your password" required>
            </div>

            <button type="submit" name = "login">Login</button>
        </form>

        <div class="signup">
            Don't have an account?
            <a href="#">Sign Up</a>
        </div>
    </div>

</body>
</html>

