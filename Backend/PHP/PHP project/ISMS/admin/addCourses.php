
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
   

if(isset($_REQUEST["courseSubmitBtn"])){
  if($_REQUEST["name"] == "" || $_REQUEST["author"] == "" || $_REQUEST["desc"] == "" || $_REQUEST["duration"] == "" || $_REQUEST["oprice"] == "" || $_REQUEST["sprice"] == "" || $_FILES['img'] == ""){

$msg ="<div class='alert alert-warning col-sm-6 mt-2'>All Fields Required</div>
";

  }else{
$name = $_REQUEST["name"];
$author = $_REQUEST["author"];
$desc = $_REQUEST["desc"];
$duration = $_REQUEST["duration"];
$oprice = $_REQUEST["oprice"];
$sprice = $_REQUEST["sprice"];
$img = $_FILES["img"]["name"];
$img_temp = $_FILES['img']['tmp_name'];
$img_folder = "../Image/courseimg/".$img;
move_uploaded_file($img_temp, $img_folder);
    $sql = "INSERT INTO `courses` (`name`, `author`, `description`, `img`, `duration`, `original_price`, `selling_price`) VALUES ('$name', '$author', '$desc', '$img_folder', '$duration', '$oprice', '$sprice')";
    $result = mysqli_query($conn, $sql);
  if($result){
    // echo json_encode("data inserted successfully");

    $msg ="<div class='alert alert-success col-sm-6 mt-2'>Course added Successfully</div>";

  }else{
    $msg ="<div class='alert alert-danger col-sm-6 mt-2'> Unable to add course</div>";

    // echo json_encode("Data does not inserted successfully");
  }


  }
}





?>

 <!-- <h1 class="col-sm-9 mt-5">Add new courses</h1> -->
 <div class="col-sm-6 bg-light mx-5 ml-5  jumbotron">
     <h2 class="text-center">Add New Courses</h2>
     <form action=""method= "POST" enctype="multipart/form-data">
     <div class="form-group">
  <label for="name" class="form-label">Course Name</label>
  <input type="text" class="form-control" id="name" name= "name" placeholder="Please enter  course name">
</div>
     <div class="form-group">
  <label for="name" class="form-label">Author</label>
  <input type="text" class="form-control" id="author" name= "author" placeholder="Please enter  course author name">
</div>
     <div class="form-group">
  <label for="name" class="form-label">Course Description</label>
  <textarea name="desc" id=""   rows="2" class="form-control"></textarea>
</div>
     <div class="form-group">
  <label for="name" class="form-label">Course Duration</label>
  <input type="text" class="form-control" id="duration" name= "duration" placeholder="Please enter course duration">
</div>
     <div class="form-group">
  <label for="name" class="form-label"> Course Original price</label>
  <input type="text" class="form-control" id="oprice" name= "oprice" placeholder="Please enter original price ">
</div>
     <div class="form-group">
  <label for="name" class="form-label"> Course Selling price</label>
  <input type="text" class="form-control" id="sprice" name= "sprice" placeholder="Please enter selling price ">
</div>
     <div class="form-group">
  <label for="name" class="form-label"> Course Image</label>
  <input type="file" class="form-control" id="img" name= "img">
</div>
 <div class="text-center mt-5">
 <div>
     <button class="btn btn-danger" id="courseSubmitBtn" name ="courseSubmitBtn">Submit</button>
     <a href="acourses.php" class = 'btn btn-secondary'>Close</a>
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