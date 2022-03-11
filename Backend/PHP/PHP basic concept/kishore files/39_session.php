<?php

// What is session ?
// used  to manage different information from different pages

// verfiy the login information
session_start();
$_SESSION["username"] = "kishore";
$_SESSION["password"] = "kishore123";

echo " you Session is completely set ";


?>