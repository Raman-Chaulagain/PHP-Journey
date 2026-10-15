<?php

    // 3 types of access modifier exists in php; public,protected,private
    class class1{
        protected $num;
        function __construct(){
           $this ->num = 50;
        }
      

        // //setters in php
        // function setValue(){
        //     $this ->num = 55;
        // }

        // //getters in php
        // function getValue(){
        //     return $this ->num;
        // }

        protected function myfunc(){
            return $this -> num;
        }

    }

    class class2 extends class1{
        function show(){
            echo $this ->myfunc();
        }
    }

    // $obj = new class1();
    // echo $obj ->setValue(); 

    $obj = new class2();
    echo $obj -> show();
   


    //using private keyword you can't access them to another class even if it extends it
    // But protected keyword allows us to access them in another class if we inherit from the other class.
?>


