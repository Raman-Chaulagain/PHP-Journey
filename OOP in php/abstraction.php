<?php

    abstract class class1{
        abstract function msg();
        
    }

    class class2 extends class1{
        function msg(){
            echo "hello";
        }
    }

    $obj = new class2();
    $obj ->msg();
?>