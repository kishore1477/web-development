<?php
$showError ="false";
$showAlert =false;
if($_SERVER['REQUEST_METHOD']=="POST"){
    include "db_connect.php";

    $user_email =$_POST['signupemail'];
    $pass =$_POST['signuppassword'];
    $cpass =$_POST['signupcpassword'];

    //  check existing of email in 
    $existEmail = "SELECT * FROM `usertable` WHERE `user_email` = '$user_email'";
    $result =mysqli_query($conn, $existEmail);
    $existNumRow =mysqli_num_rows($result);
    if($existNumRow >0){
$showError ="Email already in use";
    }
    else{
        if($pass == $cpass){
            $hash =password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `usertable` ( `user_email`, `user_pass`, `timestamp`) VALUES (  '$user_email', '$hash', current_timestamp())";
            $result = mysqli_query($conn,$sql);
            if($result){
                $showAlert = true;
           header("location: /forum/index.php?signupsuccess =true");
           exit();
        }
        // else{
            
        //     $showError ="Password do not match";
        //     header("location: /forum/index.php?signupfalse =false& Error= $showError");
        //     exit();
        //     } 


        }
         
        $showError ="Password do not match";
        header("location: /forum/index.php?signupsuccess =false&error=$showError");
    }
    // $showError ="Password do not match";
    header("location: /forum/index.php?signupsuccess =false&error=$showError");
}


?>