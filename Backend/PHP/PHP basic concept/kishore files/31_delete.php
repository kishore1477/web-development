<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "kishore";
// $database = "update";
// create a connection 
$conn = mysqli_connect($servername, $username,$password, $database);

if(!$conn){
    die ("Sorry we failed to connect ".mysqli_connect_error());
}
else{
    echo "Connection was successful"."<br>";
}
// $sql = "DELETE FROM `students` WHERE `dest` = 'hyderabad'";
$sql = "DELETE FROM `employees` WHERE `Role` = 'program' LIMIT 1";
$result =mysqli_query( $conn , $sql);
$aff = mysqli_affected_rows($conn);
echo "<br> Number of rows affected is $aff <br>";

if($result){
echo "Delete successfully";
}
 else{
    $err = mysqli_error($conn);
    echo "Not Delete successfully due to this error --> ".$err;
 
}



?>