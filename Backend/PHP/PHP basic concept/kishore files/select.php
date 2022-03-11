<?php
$servername = "localhost";
$username = "root";
$password = "";
// $database = "dbkishore";
$database = "contacts";
// create a connection 
$conn = mysqli_connect($servername, $username,$password, $database);

if(!$conn){
    die ("Sorry we failed to connect ".mysqli_connect_error());
}
else{
    echo "Connection was successful"."<br>";
}
$sql = "SELECT * FROM `contact us`";
$result =mysqli_query( $conn , $sql);


// find the number of records  returned
 $num = mysqli_num_rows($result);
 echo $num;
 echo " Records find in Database";
 echo "<br>";

 // Display the rows returned by sql query
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);


// we can fetch in better way  using while loop
while($row = mysqli_fetch_assoc($result)){
    // echo var_dump($row);
    echo $row["S.NO"]. ".Hello ". $row["Name"]." Your email is " . $row["Email"];

    echo "<br>";
}


?>