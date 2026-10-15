<?php

spl_autoload_register(function($class){
    require $class.'.php';
});
    
$obj = new first();
$obj1 = new second();
?>