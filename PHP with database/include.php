<?php

    // include and require field in php
    
    include "new.php";

    include_once "new.php"; // with this feature, we only include that file once.

    require 'new.php'; // requires also does the same part as include 
    // include let you run other code incase the file that is needed not found, but require won't let anything run if it doesn't get the file it
    // needs.

    require_once 'new.php';


?>