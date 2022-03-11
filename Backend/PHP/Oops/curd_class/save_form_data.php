<?php
    include "database_connect.php";
    $obj = new database();

    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
$name = $_POST["sname"];
$age = $_POST["sage"];
$city = $_POST["scity"];

$value = ["name" => $name, "age" =>$age, "city" =>$city];
if($obj->insert('students',$value)){
    echo "<h1>Data has been inserted successfully </h1>";
}else{
    echo "<h1>Data has not been inserted successfully </h1>";

}

?>