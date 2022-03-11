<?php
    $student_Id = $_POST["id"];

    $conn = mysqli_connect("localhost","root","", "test") or Die ("Connection Failed");

    $sql = "DELETE FROM `faculty` WHERE id= $student_Id";
    
    if( mysqli_query($conn, $sql)){
echo 1;
    }else{
        0;
    }

?>