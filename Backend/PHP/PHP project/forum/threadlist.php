<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        #ques{
            min-height: 433px;
        }
    </style>
    <title> Welcome to iDiscuss - Coding Forum</title>
</head>

<body>
  <?php include "partials/db_connect.php";  ?>
    <?php include "partials/_header.php";  ?>

    <?php
$method = $_SERVER["REQUEST_METHOD"];
 $showAlert = false;
if($method == "POST"){
    $th_title =  $_POST["title"];
    $th_desc =  $_POST["desc"];
    $th_title = str_replace("<","&lt;", $th_title);
    $th_title = str_replace(">","&gt;", $th_title);
$th_desc = str_replace(">","&gt;", $th_desc);
$th_desc = str_replace("<","&lt;", $th_desc);
    $sno =  $_POST["sno"];
    $id = $_GET["catid"];

    $sql = "INSERT INTO `thread` ( `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES (' $th_title', ' $th_desc', '$id', '$sno', current_timestamp())";

$result = mysqli_query($conn, $sql);
$showAlert =true;
if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong>  your data has been inseted wait for community respone.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
} 
}


?>
    
<?php

// $sql = "SELECT * FROM `categories`";
//       $result = mysqli_query($conn, $sql);
//      $row = mysqli_fetch_assoc($result) ;
      
        
         
//       $id  = $row["category_id"] ;
     
    // $id = $_POSt["catid"];
    $id = $_GET["catid"];

 $sql = "SELECT * FROM `categories` WHERE `category_id` = '$id'";
$result = mysqli_query($conn, $sql);
 while ($row = mysqli_fetch_assoc($result)) {
    $cat = $row["category_name"] ;
    $catdesc = $row["category_description"] ;

  echo '<div class="container my-2">
    
        <div class="bg-light p-5 rounded-lg m-3">
            <h1 class="display-4">Welcome to '.$cat.'  forum</h1>
            <p class="lead"> '.$catdesc .'</p>
            <hr class="my-4">
            <p>This is perr to perr forum for sharing knowledge with each other
                No Spam / Advertising / Self-promote in the forums, Do not post “offensive” posts, links or images, Do not cross post questions, Do not PM users asking for help, Remain respectful of other members at all times.
            </p>
            <a class="btn btn-success btn-lg" href="https://www.python.org/blogs/" role="button">Learn more</a>
        </div>
    </div>';
}
      
?>


<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ){

echo '<div class="container">
    <h   1 class="py-2">Start a Discussion</h1>

    <form action =" '.$_SERVER['REQUEST_URI'].'" method = "POST">
  
  <div class="form-group">
    <label for="exampleInputtitle">Problem Title</label>
    <input type=" text" class="form-control" id="title" name ="title" aria-describedby="titleHelp"  >
    <small id="titleHelp" class="form-text text-muted"> Keep your title  as short and crisp as possible</small>
  </div>
  <input type="hidden" name="sno" value = "'.$_SESSION['sno'].'" >

  <div class="form-group">
    <label for="exampleInputdesc">Elaborate your  Problem</label>
    <div class="form-group">
    <textarea class="form-control" id="desc" name ="desc" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-success mt-2">Submit</button>
</form>
    </div>';
}
else{
  echo '
  <div class="container">
      
  <h1 class="py-2">Start a Discussion</h1>
  <p class ="lead"> You are not logged in, please login for start a Discussion. </p>
  </div>
  ';
}

    ?>
   
 
    <div class="container " id ="ques"> 
        <h1 class="py-2">Browser Questions</h1>


<?php


$id = $_GET["catid"];
$sql = "SELECT * FROM `thread` WHERE thread_cat_id =$id";
// $sql = "SELECT * FROM `thread` WHERE thread_id =$id";
$result = mysqli_query($conn, $sql);
$noResult = true;
while ($row = mysqli_fetch_assoc($result)) {
  $noResult =  false;
$title =$row["thread_title"];
$desc =$row["thread_desc"];
$id= $row["thread_id"];
$thread_time =$row["timestamp"];
$thread_user_id =$row["thread_user_id"];
$sql2 ="SELECT * FROM `usertable` WHERE `sno` ='$thread_user_id' ";
$result2 = mysqli_query($conn, $sql2);
 $row2 =mysqli_fetch_assoc($result2);


echo '<div class="media d-flex my-3">
<img class="mr-4" src="image/userdefault.png" width="74px" alt="">
<div class="media-body mx-4">'.
'<h5 class="mt-0 ml-4"> <a class="text-dark"href ="thread.php?threadid='.$id.'" >'.$title.' </a> </h5>
'.$desc.'</div>'.'<div class="fw-bold  mx-4  d-block ">Asked by:  '.$row2["user_email"].' at '.$thread_time.'</div>'.

'</div>';

}

// echo var_dump($noResult);
if($noResult){
  echo '  <div class="jumbotron jumbotron-fluid bg-light">
  <div class="container">
    <p class="display-4">No thread Found</p>
    <p class="lead"> Be the first person to ask a question.</p>
  </div>
</div>';
}
                ?>











    </div>


    <?php include "partials/_footer.php";  ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>