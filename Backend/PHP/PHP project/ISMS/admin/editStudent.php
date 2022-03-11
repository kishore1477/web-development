<?php
if(!isset($_SESSION)){
   session_start();
}
include "../admin/admininclude/aheader.php";
include "../student/db_connect.php";     

if(isset($_SESSION['admin_loggedin'])){
    // $_SESSION["adminlogemail"] = $adminlogemail;
    echo json_encode(" work");
   }else{
      echo "<script >  location.href = '../index.php';</script>";
      // echo json_encode(" not work");
}

   
            
            
if(isset($_REQUEST["studentSubmitBtn"])){
    if($_REQUEST["id"] == ""|| $_REQUEST["name"] == "" || $_REQUEST["email"] == "" || $_REQUEST["pass"] == "" ||  $_REQUEST["occ"] == "" ){
  
  $msg ="<div class='alert alert-warning col-sm-6 mt-2'>All Fields Required</div>
  ";
  
    }else{
  $id = $_REQUEST["id"];
  $name = $_REQUEST["name"];
  $email = $_REQUEST["email"];
  $pass = $_REQUEST["pass"];
  $occ = $_REQUEST["occ"];
          $sql = "UPDATE `students` SET   `id` = '$id', `name` = '$name', `email`= '$email', `pass` = '$pass', `occupation` = '$occ' WHERE   `students`.`id` = '$id'";
          $result = mysqli_query($conn, $sql);
        if($result){
          // echo json_encode("data inserted successfully");
      
          $msg ="<div class='alert alert-success col-sm-6 mt-2'> Update Successfully</div>";
      
        }else{
          $msg ="<div class='alert alert-danger col-sm-6 mt-2'> Unable to  Update  student</div>";
      
          // echo json_encode("Data does not inserted successfully");
        }
      
      
        }
      }
      


?>


<div class="col-sm-6 bg-light mx-5 ml-5  jumbotron">
   <h2 class="text-center"> Update student</h2>

   <?php
   if (isset($_REQUEST['view'])) {
    
      $sql = 'SELECT * FROM `students` WHERE `id` = '.$_REQUEST['id'].'';
      $result = mysqli_query($conn,$sql);
      if($result){
         // echo 'work smoothly ';
      }else{
         echo 'work not smoothly';
      }
      $row = mysqli_num_rows($result);
      $fetch = mysqli_fetch_assoc($result);
      // while(){

      // }
      
      

   }

   ?>
            <form action=""method= "POST" enctype="multipart/form-data">
      
      <div class="form-group">
   <label for="name" class="form-label"> Student ID</label>
   <input type="text" class="form-control" id="id" name= "id" value="<?php  if(isset($fetch['id'])){
       echo $fetch['id'];
   } ?>" >
 </div>
      <div class="form-group">
   <label for="name" class="form-label"> Name</label>
   <input type="text" class="form-control" id="name" name= "name" value="<?php  if(isset($fetch['name'])){
       echo $fetch['name'];
   } ?>" >
 </div>
      <div class="form-group">
   <label for="name" class="form-label"> Email</label>
   <input type="email" class="form-control" id="email" name= "email"value="<?php  if(isset($fetch['email'])){
       echo $fetch['email'];
   } ?>" >
 </div>
      <div class="form-group">
   <label for="name" class="form-label">  Password</label>
   <input type=" " class="form-control" id="pass" name= "pass"  value="<?php  if(isset($fetch['pass'])){
       echo $fetch['pass'];
   } ?>">
 </div>
      <div class="form-group">
   <label for="name" class="form-label"> Occupation</label>
   <input type="text" class="form-control" id="occ" name= "occ" value="<?php  if(isset($fetch['occupation'])){
       echo $fetch['occupation'];
   } ?>">
 </div>
    
  <div class="text-center mt-5">
  <div>
      <button class="btn btn-danger" id="studentSubmitBtn" name ="studentSubmitBtn">Submit</button>
      <a href="students.php" class = 'btn btn-secondary'>Close</a>
      <?php
       if(isset($msg)){
         echo   $msg;
       }
      ?></div>
  </div>
      </form>
</div>
 












<?php
include "../admin/admininclude/afooter.php";


?>