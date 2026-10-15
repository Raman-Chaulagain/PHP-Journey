<?php

    class database{
        public function connect(){
            $this->host = "localhost";
            $this->user = "root";
            $this -> pass = "";
            $this ->database = "OOP CRUD";
            $conn = new mysqli($this->host,$this->user,$this->pass,$this->database);

            if($conn->connect_error){
                echo $conn->connect_error;
            }

            else{
                echo "db connected";
            }
        }


    }

    $obj = new database();
    $obj->connect();


?>