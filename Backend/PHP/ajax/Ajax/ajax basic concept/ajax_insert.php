<?php
    $first_nam = $_POST["first_name"];
    $last_nam = $_POST["last_name"];
    $conn = mysqli_connect("localhost","root","", "test") or Die ("Connection Failed");

    $sql = "INSERT INTO  faculty (first_name,last_name) VALUE ('{$first_nam}', '{$last_nam}')";
    // $result  = mysqli_query($conn, $sql) or Die ("Sql query failed");
    if(mysqli_query($conn, $sql)){
        echo 1;
    }else{
        echo 0;
    }

?>