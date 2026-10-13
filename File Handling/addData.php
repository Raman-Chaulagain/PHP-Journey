<?php

    include "connection.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $encryptedpass = md5($password); //encryption

    $sql = "INSERT INTO register(username,password) VALUES('$username','$encryptedpass')";
    $check = mysqli_query($connection,$sql);

    if($check){
        echo "Data Inserted Successfully";
    }
    else{
        echo "Data Insertion failed";
    }



?>