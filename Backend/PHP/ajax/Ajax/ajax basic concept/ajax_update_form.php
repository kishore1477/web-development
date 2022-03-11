<?php
    $student_Id = $_POST["id"];
    $firstName = $_POST["first_name"];
    $lastName= $_POST["last_name"];

    $conn = mysqli_connect("localhost","root","", "test") or Die ("Connection Failed");

    $sql = "UPDATE `faculty` SET first_name ='{$firstName}',  last_name ='{$lastName}'  WHERE id= $student_Id";
    
    if( mysqli_query($conn, $sql)){
echo 1;
    }else{
        0;
    }

?>