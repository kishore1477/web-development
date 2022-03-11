<?php
$servername = "localhost";
$username = "root";
$password = "";
// $database = "dbkishore";
$database = "update";
// create a connection 
$conn = mysqli_connect($servername, $username,$password, $database);

if(!$conn){
    die ("Sorry we failed to connect ".mysqli_connect_error());
}
else{
    echo "Connection was successful"."<br>";
}
$sql = "SELECT * FROM `students` WHERE `dest`='hyderabad'";
$result =mysqli_query( $conn , $sql);

$row = mysqli_fetch_assoc($result);
// find the number of records  returned
 $num = mysqli_num_rows($result);
 echo $num;
 echo " Records find in Database";
 echo "<br>";
 
$no=1;
//  if($num>0){
    while($row = mysqli_fetch_assoc($result)){
        echo $no. ".Hello ". $row["Name"]."Welcome to  " . $row["dest"];
        echo "<br>";
        $no = $no +1;

 }
// }

?>