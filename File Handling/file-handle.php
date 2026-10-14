<?php

    //reading files in php
    // echo readfile('demo.txt');

    // $filedata = fopen("demo.txt", "r");
    // echo fread($filedata,filesize("demo.txt"));
    // fclose($filedata);

    //get a single line in php
    $filedata = fopen("demo.txt","r");
    echo fgets($filedata,filesize("demo.txt"));



?>  