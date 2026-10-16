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
    }

    $obj = new queries();
    $fetch_data = $obj->getData();

?>