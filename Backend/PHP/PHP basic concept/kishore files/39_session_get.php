<?php
session_start();


if(isset($_SESSION["username"])){
    echo "Your username is " .$_SESSION["username"]."<br>";
    echo "Your password is ". $_SESSION["password"];
    
}
else{
    echo "Please login  to continue";
}


?>