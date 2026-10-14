<?php

    class MyClass{
        public $a = 10;

        function showValue(){
            echo $this -> a;
        }
    }

    $obj = new MyClass();
    echo $obj -> showValue();

?>