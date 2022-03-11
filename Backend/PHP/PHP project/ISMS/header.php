<?php

// if( ! $_SESSION)
// {
    session_start();
// }    
// if(!isset($_SESSION['loggedin'])){
//   session_start();
// }
//   // if(!isset($_SESSION)) 
  // { 
  //   session_start(); 
  // }
  // else
  // {
  //   session_destroy();
  //   session_start(); 
  // }
  //       ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=" CSS/bootstrap.min.css">
  <link rel="stylesheet" href=" CSS/all.min.css">
  <!-- Favicon -->
  <link rel="shortcut icon" href="Image/school-solid.svg" type="image/x-icon">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
  <!-- Custom Font -->
  <link rel="stylesheet" href="CSS/style.css">
  <title> ISchool Management System</title>
</head>

<body>
  <!-- start navigation -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="index.php">iSchool</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item custom-nav-item">
            <a class="nav-link" href="courses.php">Courses</a>
          </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php"> Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> Feedback</a>
      </li>
     <?php
      //  session_start();
    
      if(isset($_SESSION["loggedin"])){
        echo ' <li class="nav-item">
        <a class="nav-link" href="#">  My Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">  Logout</a>
      </li>';
      }else{
        echo ' <li class="nav-item">
        <a class="nav-link"  data-bs-toggle="modal" data-bs-target="#stuLoginModalCenter" href="#"> Login</a>
  
          <!-- <a class="nav-link" href="#">Login</a> -->
        </li>
        <li class="nav-item">
        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter" href="#">Sign up</a>
          <!-- <a class="nav-link" href="#">Signup</a> -->
        </li>
       ';
      }
     
     ?>
      <li class="nav-item custom-nav-item">
              <a class="nav-link" href="paymentstatus.php">Payment Status</a>
            </li>
     
     
    </ul>
  </div>
</nav>



