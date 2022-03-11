<?php
include "_db_connect.php";
//  require "_db_connect.php";

$sql = "SELECT * FROM `employees` WHERE `Role`='program'";
$result =mysqli_query( $conn , $sql);

// $row = mysqli_fetch_assoc($result);
// find the number of records  returned
 $num = mysqli_num_rows($result);
 echo $num;
 echo " Records find in Database";
 echo "<br>";
 
$no=1;
 if($num>0){
    while($row = mysqli_fetch_assoc($result)){
        // echo $no. ".Hello ". $row["Name"]."Welcome to  " . $row["dest"];
        echo $no. ".Hello ". $row["Name"]."  your role is   " . $row["Role"];
        echo "<br>";
        $no = $no +1;

 }
}



?>