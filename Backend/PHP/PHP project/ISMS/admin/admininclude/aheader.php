
<?php
   // if(!isset($_SESSION)){
   //    session_start();
   // }
   // ini_set('memory_limit', '-1'); // or you could use 1G

   // include "../admin/admininclude/aheader.php";
   // include "../student/db_connect.php";     
   
   // if(isset($_SESSION['admin_loggedin'])){
   //     $_SESSION["adminlogemail"] = $adminlogemail;
   //     echo json_encode(" work");
   //    }else{
   //       echo "<script >  location.href = '../index.php';</script>";
   //       // echo json_encode(" not work");
   // }
   

?>




<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
   <!-- Custom Font -->
   <link rel="stylesheet" href="../CSS/adminStyle.css">
   <!-- Font awesome -->
   <link rel="stylesheet" href="../CSS/all.min.css">

   <title> Admin Dashboard</title>
</head>

<body>
   <nav class="navbar  navbar-dark fixed-top shadow" style="background-color: #225470;">

      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="adminDashboard.php">E-learning
         <small class="text-white">admin area</small>
      </a>
   </nav>

   <div class="container-fluid mb-5" style="margin-top:50px;">
      <div class="row">
         <nav class="col-sm-3   bg-light sidebar py-3 d-print-none">
            <div class="sidebar-sticky">
               <ul class="nav flex-column">
                  <li class="nav-item">
                     <a href="adminDashboard.php" class="nav-link"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                  </li>
                  <li class="nav-item">
                     <a href="acourses.php" class="nav-link"> <i class="fab fa-accessible-icon"></i> Courses</a>
                  </li>
                  <li class="nav-item">
                     <a href="adminDashboard.php" class="nav-link"> <i class="fab fa-accessible-icon"></i> Lesson</a>
                  </li>
                  <li class="nav-item">
                     <a href="students.php" class="nav-link"><i class="fas fa-user"></i> Student</a>
                  </li>
                  <li class="nav-item">
                     <a href="adminDashboard.php" class="nav-link"><i class="fas fa-table"></i> Sell report</a>
                  </li>
                  <li class="nav-item">
                     <a href="adminDashboard.php" class="nav-link"><i class="fas fa-table"></i> Payment Status</a>
                  </li>
                  <li class="nav-item">
                     <a href="adminDashboard.php" class="nav-link"> <i class="fab fa-accessible-icon"></i> Feedback</a>
                  </li>
                  <li class="nav-item">
                     <a href="adminDashboard.php" class="nav-link"><i class="fas fa-key"></i> Change Password</a>
                  </li>
                  <li class="nav-item">
                     <a href="../logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
                  </li>

               </ul>
            </div>
         </nav>
