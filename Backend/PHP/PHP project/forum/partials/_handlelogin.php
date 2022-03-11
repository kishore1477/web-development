<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include "db_connect.php";


$loginemail = $_POST["loginemail"];
$loginpass = $_POST["loginpass"];

$sql = "SELECT * FROM `usertable` WHERE `user_email` ='$loginemail'";
$result = mysqli_query($conn, $sql);
 
$numRow =  mysqli_num_rows($result);
if($numRow==1){
    $row = mysqli_fetch_assoc($result);
     
    if(password_verify($loginpass, $row["user_pass"])){
        session_start();
        $_SESSION['loggedin']= true;
        $_SESSION['useremail']=  $loginemail;
        $_SESSION['sno'] = $row['sno'];
        echo "loggedin".$loginemail;
        $showAlert =true;
        session_regenerate_id(false);
        header("location: /forum/index.php?loginsuccess =true");
        exit();
    }
    // header("location: /forum/index.php");
    
    
}

else{
    $showError ="you are not login";
    header("location: /forum/index.php?loginsuccess =false &Error = $showError");
    // header("location: /forum/index.php");
    
}




}
