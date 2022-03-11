<?php
 echo $_COOKIE["cookies"];
 
 //Delete cookies
 setcookie("cookies", "", time() -  (86400),  "/");
?>