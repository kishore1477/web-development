
<?php
    if(!isset($_SESSION)){
      session_start();
   }
   include "../admin/admininclude/aheader.php";
   include "../student/db_connect.php";     
   
   if(isset($_SESSION['admin_loggedin'])){
    //    $_SESSION["adminlogemail"] = $adminlogemail;
       echo json_encode(" work");
      }else{
         echo "<script >  location.href = '../index.php';</script>";
         // echo json_encode(" not work");
   }
   

if(isset($_REQUEST["studentSubmitBtn"])){
  if($_REQUEST["name"] == "" || $_REQUEST["email"] == "" || $_REQUEST["pass"] == "" ||  $_REQUEST["occ"] == "" ){

$msg ="<div class='alert alert-warning col-sm-6 mt-2'>All Fields Required</div>
";

  }else{
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$pass = $_REQUEST["pass"];
$hash = password_hash($pass, PASSWORD_DEFAULT);
$occ = $_REQUEST["occ"];
 
    $sql = "INSERT INTO `students` (`name`, `email`, `pass`, `occupation`) VALUES ('$name', '$email', '$hash', '$occ')";
    $result = mysqli_query($conn, $sql);
  if($result){
    // echo json_encode("data inserted successfully");

    $msg ="<div class='alert alert-success col-sm-6 mt-2'>Student added Successfully</div>";

  }else{
    $msg ="<div class='alert alert-danger col-sm-6 mt-2'> Unable to add  Student</div>";

    // echo json_encode("Data does not inserted successfully");
  }


  }
}





?>

 <!-- <h1 class="col-sm-9 mt-5">Add new courses</h1> -->
 <div class="col-sm-6 bg-light mx-5 ml-5  jumbotron">
     <h2 class="text-center">Add New  Students</h2>
     <form action=""method= "POST" enctype="multipart/form-data">
      
     <div class="form-group">
  <label for="name" class="form-label"> Name</label>
  <input type="text" class="form-control" id="name" name= "name" placeholder="Please enter   student name">
</div>
     <div class="form-group">
  <label for="name" class="form-label"> Email</label>
  <input type="email" class="form-control" id="email" name= "email" placeholder="Please enter  email">
</div>
     <div class="form-group">
  <label for="name" class="form-label">  Password</label>
  <input type=" " class="form-control" id="pass" name= "pass" placeholder="Please enter  password">
</div>
     <div class="form-group">
  <label for="name" class="form-label"> Occupation</label>
  <input type="text" class="form-control" id="occ" name= "occ" placeholder="Please enter   student Occupation">
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