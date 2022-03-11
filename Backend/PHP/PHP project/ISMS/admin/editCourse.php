<?php
if(!isset($_SESSION)){
   session_start();
}
include "../admin/admininclude/aheader.php";
include "../student/db_connect.php";     

if(isset($_SESSION['admin_loggedin'])){
    $_SESSION["adminlogemail"] = $adminlogemail;
    echo json_encode(" work");
   }else{
      echo "<script >  location.href = '../index.php';</script>";
      // echo json_encode(" not work");
}

   
            
            
if(isset($_REQUEST['requpdate'])){
   if($_REQUEST["id"] == "" || $_REQUEST["name"] == "" || $_REQUEST["author"] == "" || $_REQUEST["desc"] == "" || $_REQUEST["duration"] == "" || $_REQUEST["oprice"] == "" || $_REQUEST["sprice"] == "" || $_FILES['imag'] == '') {

      $msg ="<div class='alert alert-warning col-sm-6 mt-2'>All Fields Required</div>
      ";
      
        }else{
      $cid = $_REQUEST['id'];
      $Uname = $_REQUEST["name"];
      $Uauthor = $_REQUEST["author"];
      $Udesc = $_REQUEST["desc"];
      $Uduration = $_REQUEST["duration"];
      $Uoprice = $_REQUEST["oprice"];
      $Usprice = $_REQUEST["sprice"];
      $Uimg = '../Image/courseimg/'.$_FILES["imag"]["name"];
$Uimg_name = $_FILES["imag"]["name"];
      // echo $Uimg;
      $Uimg_temp = $_FILES['imag']['tmp_name'];
      // echo $Uimg_temp;
      $Uimg_folder = "../Image/courseimg/".$Uimg_name;
      // echo $Uimg_folder;
      move_uploaded_file($Uimg_temp, $Uimg_folder);
          $sql = "UPDATE `courses` SET `id` = '$cid', `name` = '$Uname', `author`= '$Uauthor', `description` = '$Udesc', `duration` = '$Uduration', `original_price` = '$Uoprice', `selling_price` = '$Usprice', `img` = '$Uimg' WHERE   `courses`.`id` = '$cid'";
          $result = mysqli_query($conn, $sql);
        if($result){
          // echo json_encode("data inserted successfully");
      
          $msg ="<div class='alert alert-success col-sm-6 mt-2'> Update Successfully</div>";
      
        }else{
          $msg ="<div class='alert alert-danger col-sm-6 mt-2'> Unable to  Update course</div>";
      
          // echo json_encode("Data does not inserted successfully");
        }
      
      
        }
      }
      


?>


<div class="col-sm-6 bg-light mx-5 ml-5  jumbotron">
   <h2 class="text-center">Add New Courses</h2>

   <?php
   if (isset($_REQUEST['view'])) {
    
      $sql = 'SELECT * FROM `courses` WHERE `id` = '.$_REQUEST['id'].'';
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
            <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                  <label for="id" class="form-label">Course ID</label>
                  <input type="text" class="form-control" id="id" name="id"  value = "<?php if(isset($fetch['id'])){
            echo $fetch['id']; 
                  } ?> " readonly>
                
               </div>
               <div class="form-group">
                  <label for="name" class="form-label">Course Name</label>
                  <input type="text" class="form-control" id="name" name="name"  value = " <?php if(isset($fetch['name'])){
                 echo $fetch['name']; 
                  } ?> ">
                
               </div>
              
               <div class="form-group">
                  <label for="name" class="form-label">Author</label>
                  <input type="text" class="form-control" id="author" name="author"   value = "<?php if(isset($fetch['author'])){
                     {echo $fetch['author']; }
                  } ?> ">  
               </div>
               <div class="form-group">
                  <label for="name" class="form-label">Course Description</label>
                  <textarea name="desc" id="" rows="2" class="form-control"    ><?php if(isset($fetch['description'])){
                   echo $fetch['description']; 
                  } ?> </textarea>
               </div>
               <div class="form-group">
                  <label for="name" class="form-label">Course Duration</label>
                  <input type="text" class="form-control" id="duration" name="duration"  value =  "<?php if(isset($fetch['duration'])){
                    echo $fetch['duration'];  
                  } ?> ">       
               </div>
               <div class="form-group">
                  <label for="name" class="form-label"> Course Original price</label>
                  <input type="text" class="form-control" id="oprice" name="oprice"  value =  "<?php if(isset($fetch['original_price'])){
                     echo $fetch['original_price']; 
                  } ?> ">  
               </div>
               <div class="form-group">
                  <label for="name" class="form-label"> Course Selling price</label>
                  <input type="text" class="form-control" id="sprice" name="sprice"  value =  "<?php if(isset($fetch['selling_price'])){
                     echo $fetch['selling_price']; 
                  } ?> ">   
               </div>
               <div class="form-group">
                  <label for="name" class="form-label"> Course Image</label>
                  <img src="<?php if(isset($fetch['img'])){
                     echo $fetch['img']; 
                  } ?> " alt="" class = "img-thumbnail">
                  <input type="file" class="form-control" id="imag" name = "imag">
               </div>
               <div class="text-center mt-5">
                  <div>
                     <button class="btn btn-danger" id="requpdate" name="requpdate"> Update</button>
                     <a href="acourses.php" class='btn btn-secondary'>Close</a>
                     <?php
             if(isset($msg)){
            echo   $msg;
      }
     ?>
                  </div>
               </div>
            </form>
</div>
 












<?php
include "../admin/admininclude/afooter.php";


?>