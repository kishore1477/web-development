<?php
echo "Welcome to stage where we connecting  MySql  with  database" . "<br>";
/*
ways to connect a MvSql  Database 
1. MySqli  extension 
2.PDO(php document object )
*/
// connecting to the database 
$servername = "localhost";
$username = "root";
$password = "";

// create a connection 
 $conn = mysqli_connect($servername, $username , $password);

 if(!$conn){
     die ("Sorry we failed to connect ".mysqli_connect_error());
 }
 else{

     echo "Connection was successful";
 }


?>