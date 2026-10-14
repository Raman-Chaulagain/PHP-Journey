<?php

    //reading files in php
    // echo readfile('demo.txt');

    // $filedata = fopen("demo.txt", "r");
    // echo fread($filedata,filesize("demo.txt"));
    // fclose($filedata);

    //get a single line in php
    // $filedata = fopen("demo.txt","r");
    // echo fgets($filedata,filesize("demo.txt"));

    // get a single character in php
    // $filedata = fopen("demo.txt", "r");
    // echo fgetc($filedata);

    // end of file feof function 
    // while(!feof($filedata)){
    //     echo fgets($filedata)."<br>";
    // }

    // fclose($filedata);

    $fileName = fopen("tutorial.txt","w");
    fwrite($fileName,"hello there");





?>  
