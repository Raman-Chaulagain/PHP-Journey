<?php

setcookie("username", "CodeNextDoor", time() - 3600 , "/");
// to delete the cookie instantly just do time() - 3600 or the value you have written 

if(isset($_COOKIE['username'])){
    echo $_COOKIE['username'];
}
else{
    echo "cookies is expired.";
}


?>