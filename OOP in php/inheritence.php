<?php

    class Base{
        function __construct(){
            echo "This is a parent class";
        }

    }

    class Chile extends Base{
        function __construct(){
            parent:: __construct(); // to call parent class
            echo "this is a child class";
        }
    }

    $obj = new Base();
    $obj1 = new Chile();

    
?>