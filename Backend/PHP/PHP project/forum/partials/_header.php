<?php

session_start();
session_regenerate_id(true);
// session_regenerate_id();
// 9hblk7rm0981tp32dh82qjulqj

//      m1infmdbpqvcodqdufuerpbqd1
// sess_m1infmdbpqvcodqdufuerpbqd1

// echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
<a class="navbar-brand" href="/forum">iDiscuss</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="/forum">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/forum/partials/about.php">About</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
Top   Categories
</a>
<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
<li>';
 include "db_connect.php";  
 $sql= "SELECT * FROM `categories`";
 $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
         echo '<a class="dropdown-item" href="threadlist.php?catid= '.$row['category_id'].'"> '.$row['category_name'].'</a>';
        }
          echo'
        </ul>
      </li>
      <li class="nav-item">
      <a class="nav-link " href="/forum/partials/contact.php" tabindex="-1"  >Contact</a>

      </li>
      </ul>
      <div class="d-flex ">';
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ){
echo '<form class="d-flex form-inline " action ="search.php" method ="get">
<input class="form-control" type="search" name ="search" id="search" placeholder="Search" aria-label="Search">
<button class="btn btn-success px-3 mx-3  " type="submit"  >Search</button>
<p class ="text-light my-0" > welcome '. $_SESSION['useremail'] .' </p>
<a href = "partials/_logout.php" class="btn btn-outline-success mx-3 my-0" >logout</a>

</form>';

    }
    else{

     echo ' 
      <form class="d-flex form-inline" >
      <input class="form-control" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success" type="submit">Search</button>
      </form>
       
      <button class="btn btn-outline-success mx-2"data-bs-toggle="modal" data-bs-target="#loginModal">login</button>
      <button class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#signupModal">Signup</button>
      </div>';
    }

 echo ' </div>
</div>
</nav>';
include 'loginModal.php';
include 'signupModal.php';

// include "_handlesignup.php";
if(isset($_GET["signupsuccess"]) && $_GET["signupsuccess"] == "true" ){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong>Success!</strong> You can now login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';

}
    

 
?>