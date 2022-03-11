<?php
    
    // connect to the database 
    include "db_connect.php";
    $msg = $_POST["text"];
    $room = $_POST["room"];
    $ip = $_POST["ip"];
$sql = "INSERT INTO `msgs` (`msg`, `room`, `ip`, `time`) VALUES ('$msg', '$room', '$ip', current_timestamp())";
$result = mysqli_query($conn,$sql);
mysqli_close($conn);
?>