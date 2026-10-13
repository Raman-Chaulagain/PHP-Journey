<?php

    include "connection.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $encryptedpass = password_hash($password, PASSWORD_BCRYPT); //encryption using BCRYPT

    $sql = "INSERT INTO register(username,password) VALUES('$username','$encryptedpass')";
    $check = mysqli_query($connection,$sql);

    if($check){
        echo "Data Inserted Successfully";
    }
    else{
        echo "Data Insertion failed";
    }



?>