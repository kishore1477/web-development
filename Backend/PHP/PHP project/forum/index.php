<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/all.min.css">
  <title> Welcome to iDiscuss - Coding Forum</title>
</head>

<body>
  <?php include "partials/db_connect.php";  ?>
  <?php include "partials/_header.php";  ?>
  <!-- <?php
  // echo "HELLO";
 
?> -->
  <!-- slider start here  -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/forum/image/slider1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <!-- <img src="/forum/image/slider2.jpg" alt=""> -->
        
      </div>
      <img src="/forum/image/slider3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-item">

      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Container categories start here  -->
  <div class="container my-2">

    <h2 class="text-center">iDiscuss-Categories</h2>
    <div class="row">
      <!-- fetch all categories  -->
      <?php

      $sql = "SELECT * FROM `categories`";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        // echo $row["category_id"] . "<br>";
        // echo $row["category_name"] . "<br>";
        
         
      $id  = $row["category_id"] ;
      $cat  = $row["category_name"] ;
      $desc = $row["category_description"] ;



     echo ' <div class="col-md-4 my-3">
        <div class="card" style="width: 18rem;">
          <img src="image/card'.$id.'.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"> <a href = "/forum/threadlist.php?catid='.$id.'">'.$cat.' </a></h5>
            <p class="card-text">'.$desc.'</p>
            <a href="/forum/threadlist.php?catid ='.$id.'" class="btn btn-primary">View Threads</a>
          </div>
        </div>
      </div>';
      }

      ?>

 
      <!-- use a for loop  to iterate  through categories  -->
      
    </div>
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