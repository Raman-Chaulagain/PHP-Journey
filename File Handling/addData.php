<?php

    include "connection.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO register(username,password) VALUES('$username','$password')";
    $check = mysqli_query($con,$sql);

    if($check){
        echo "Data Inserted Successfully";
    }
    else{
        echo "Data Insertion failed";
    }



?>