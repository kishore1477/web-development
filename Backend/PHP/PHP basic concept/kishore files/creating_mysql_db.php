<?php

$servername = "localhost";
$username = "root";
$password = "";
// create a connection 
$conn = mysqli_connect($servername, $username,$password);

if(!$conn){
    die ("Sorry we failed to connect ".mysqli_connect_error());
}
else{
    echo "Connection was successful"."<br>";
    }
    // create database
$mysql = "CREATE DATABASE dbkishore7";
// mysqli_query( $conn , $mysql);
$result =mysqli_query( $conn , $mysql);
// check for database creation success
if($result){
    echo "The database was created successfully";
}
else{
    echo "The database was  not created successfully because of this error --> ".mysqli_error($conn);
}
// echo "The result is ";
// echo var_dump($result);
// echo "<br>";

    
?>