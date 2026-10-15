<?php

    class class1{
        public static $name = "PHP";

        public static function show(){
            echo self :: $name;
        }

        public function __construct(){
            echo self::$name = "java";
        }
    }

    //using static members or variables in another class
    class class2 extends class1{
        public static function show(){
           echo parent :: $name;
        }
    }
    

    echo class1 :: $name;
    class1 :: show(); 
    $obj = new class2();
    $obj ->show();
    
?>