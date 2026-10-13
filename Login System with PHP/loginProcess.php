<?php

    include "connection.php";

    if(isset($_POST['login'])){

        // mysqli_real_escape_string($con,$method['name']) prevents from sql injection.
        $username = mysqli_real_escape_string($con, $_POST['username']) ;
        $password = mysqli_real_escape_string($con,$_POST['password']);

        $sql = "SELECT username,password FROM register WHERE username = '$username' AND password = '$password'";
        $check = mysqli_query($con,$sql);
        $result = mysqli_fetch_assoc($check);
        $user = $result['username'];
        $pass = $result['password'];

        if(mysqli_num_rows($check) > 0){
            session_start();
            $_SESSION['username'] = $user;
            header("location:Welcome.php");
        }
        else{
            header("location:login.php");
        }
    }
    else{

    }
   

?>