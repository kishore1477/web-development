<?php
$servername = "localhost";
$username = "root";
$password = "";
// $database = "dbkishore";
$database = "kishore";
// create a connection 
$conn = mysqli_connect($servername, $username,$password, $database);

if(!$conn){
    die ("Sorry we failed to connect ".mysqli_connect_error());
}
else{
    echo "Connection was successful"."<br>";
    }

    // insert data into table
    $sql ="INSERT INTO `employees` (  `Name`, `Role`, `Date of joining`) VALUES ('kishore kumar', 'program', '2021-07-27 21:02:50.000000')";
    // $sql = "INSERT INTO `my table` ( `hospital`, `vaccine type`, `Age`) VALUES ( 'jinnah', 'Pakistani', '22')";
    // $sql = " INSERT INTO `my table` (  `country`, `Population`, `Area`) VALUES (  'Pakistan', '455677', '46757')";
    $result =mysqli_query( $conn , $sql);

    // check for record inserted  successfully
    if($result){
        echo " The record was inserted  successfully";
    }
    else{
        echo "The  record was  not  inserted  successfully because of this error --> ".mysqli_error($conn);
    }




?>