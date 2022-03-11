<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbkishore";
// create a connection 
$conn = mysqli_connect($servername, $username,$password, $database);

if(!$conn){
    die ("Sorry we failed to connect ".mysqli_connect_error());
}
else{
    echo "Connection was successful"."<br>";
    }
     // create table in database
    $sql =" CREATE TABLE  `my table2` ( `S.NO` INT(2) NOT NULL AUTO_INCREMENT , `hospital` VARCHAR(11) NOT NULL , `vaccine type` VARCHAR(11) NOT NULL , `Age` INT(4) NOT NULL , PRIMARY KEY (`S.NO`)) ENGINE = InnoDB
    ";
    $result =mysqli_query( $conn , $sql);
// check for database creation success
if($result){
    echo "The Table was created successfully";
}
else{
    echo "The Table was  not created successfully because of this error --> ".mysqli_error($conn);
}
?>