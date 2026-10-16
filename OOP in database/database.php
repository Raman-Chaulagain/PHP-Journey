<?php

    class database{

        public function connect(){
            $this->host = "localhost";
            $this->user = "root";
            $this->pass = "";
            $this->database = "OOP CRUD";
            $conn = new mysqli($this->host,$this->user,$this->pass,$this->database);
            return $conn;
        }
    }

    class queries extends database{
        public function getData(){

            $sql = "SELECT * FROM data";
            $data = $this->connect()->query($sql);
            if($data->num_rows>0){
                $arr = array();
                while($result=$data->fetch_assoc()){
                    $arr[] = $result;
                }
                return $arr;
            }
            else{
                return [];
            }
        }

        public function adddata($data){
            $userid = mt_rand(1111,9999);
            $uname = $data['name'];
            $uemail = $data['email'];
            $upass = $data['password'];
            $sql = "INSERT INTO data(userid,username,useremail,userpass) VALUES('$userid','$$uname','$uemail','$upass')";
            $data = $this->connect()->query($sql);


            
            if($data){
                echo "Inserted Successfully";
            }
            else{
                echo "Unable to insert them successfully";
            }

        }
    }

    $obj = new queries();
    $fetch_data = $obj->getData();


    if(isset($_POST['submit'])){
        $obj-> adddata($_POST);
    }
?>