<?php

    //we can create multiple traits
    trait t1{
        function showmsg(){
            echo "this is a trait";
        }
    }

    class class1{
        use t1; // we can allow any class which trait to use or not.
    }

    class class2{
        use t1;
    }

    class class3{
    }
    

    $obj1 = new class1();
    $obj1 ->showmsg();

    $obj2 = new class2();
    $obj2 ->showmsg();

    $obj3 = new class3();

?>