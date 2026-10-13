<?php

    include "connection.php";

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT username,password FROM register WHERE username = '$username'";
        $check = mysqli_query($connection,$sql);
        $result = mysqli_fetch_assoc($check);
        $user = $result['username'];
        $encryptedpass = $result['password'];

        if(mysqli_num_rows($check) > 0){

            if(md5($password) == $encryptedpass){ // decryption
                echo "correct password";
            }
            
        }
        else{
            header("location:login.php");
        }
    }
    else{

    }
   

?>