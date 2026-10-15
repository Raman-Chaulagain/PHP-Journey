<?php

// inheritence allows multiple inheritence 
  interface sum{
    public function sum();
    // only public function is used in inheritence.
  }

  interface message{
    public function msg();
  }

  class class1 implements sum,message{
    function sum(){
        echo 50 + 5 ;
    }

    function msg(){
        echo "Hello";
    }
  }

  $obj = new class1();
  $obj ->sum();
  $obj -> msg();

 
?>