<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "user";

$conn = mysqli_connect($servername, $username,$password, $database);

if(!$conn){
//     echo "success";
// }
// else{
echo "Error -->".mysqli_connect_error($conn);
}


?>