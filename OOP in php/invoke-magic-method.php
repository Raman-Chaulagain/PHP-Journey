<?php

    class class1{
        public function __construct(){
            $this->name = "dell";
        }

        function __invoke(){
            echo $this->name;
        }
    }

    $obj = new class1();
    $obj();
?>