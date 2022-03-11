
<?php
include_once "../student/db_connect.php";
    if(!isset($_SESSION["admin_loggedin"])){

  
        if(isset($_POST["adlogemail"]) &&  isset($_POST["adlogpass"])){
          $adminlogemail = $_POST["adlogemail"];
          $adminlogpass = $_POST["adlogpass"];
          $sqllog = "SELECT * FROM `admin` WHERE `email` = '$adminlogemail'";
          $resultlog = mysqli_query($conn,$sqllog);
        //   echo json_encode($resultlog);
         $rowlog = mysqli_num_rows($resultlog);
      
         if($rowlog == 1){
           $rowfetch = mysqli_fetch_assoc($resultlog);
            // echo json_encode($rowfetch);
           $fetch_email = $rowfetch["email"]; 
            // echo json_encode($fetch_email);
           $fetch_pass = $rowfetch["pass"];
            // echo json_encode($fetch_pass);
        //    if($fetch_email == $adminlogemail  &&  password_verify($adminlogpass,$fetch_pass)){
           if($fetch_email == $adminlogemail  &&  $fetch_pass == $adminlogpass){
           session_start();
              $_SESSION["admin_loggedin"] = true;
              $_SESSION["adminlogemail"] = $adminlogemail;
            
             
             echo json_encode($rowlog);
             //  echo json_encode("email and pass is matched");
            } 
          }else if($rowlog != 1){
            echo json_encode($rowlog);
          }
          // else {
          //   echo json_encode($rowlog);
          // }
        }
        
      }
        
        
        

?>