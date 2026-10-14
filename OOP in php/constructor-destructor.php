<?php
    class MyClass{
        function __construct(){
            echo "this is a constructor";
        }

        function __destruct(){
            echo "this is a destructor";
        }
    }

    // constructor always runs at the first and destructor runs at the end always.
    
    $obj = new MyClass();

?>