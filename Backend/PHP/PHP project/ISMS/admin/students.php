

<?php

//    if(!isset($_SESSION)){
//     session_start();
//  }
 include "../admin/admininclude/aheader.php";
 include "../student/db_connect.php";     
 
//  if(isset($_SESSION['admin_loggedin'])){
//      $_SESSION["adminlogemail"] = $adminlogemail;
//      echo json_encode(" work");
//     }else{
//        echo "<script >  location.href = '../index.php';</script>";
//        // echo json_encode(" not work");
//  }
 
   
    
 ?>
 
 <div class="col-sm-6 m-0 text-center">
     <p class="bg-dark text-white p-2">List of Courses</p>
    <?php
        
        include "../student/db_connect.php";
        $sql = "SELECT * FROM `students`";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($result);
     if($row > 0){
    
  
    ?>
 <table class="table">
     <thead>
          <th scope ="col"> Students ID</th>
          <th scope ="col"> Name</th>
          <th scope ="col">  Email</th>
          <th scope ="col">Action</th>
     </thead>
     <tbody>
        <?php
            while($fetch =mysqli_fetch_assoc($result)){
          echo ' <tr>
          <th scope = "row">'.$fetch['id'].'</th>
         <td>'.$fetch['name'].'</td>
         <td>'.$fetch['email'].' </td>
         <td> 
         <form action="editStudent.php" method="POST" class = "d-inline">
         <input  type ="hidden" name = "id" value ='.$fetch['id'].'>

         <button type="submit" class = "btn btn-info mr-1" value="View"name = "view"> <i class="far fa-pen"></i></button>
         </form>
         ';



       echo '<form action="" method="POST" class = "d-inline">
         <input  type ="hidden" name = "id" value ='.$fetch['id'].'>

         <button type="submit" class = "btn btn-secondary" value="delete" name = "delete"><i class = "far fa-trash-alt"></i></button>
        </td>
        </tr>
        
        </form>
        ';

    }
   
        
    ?>
    
     </tbody>
 </table>
<?php
       } else{
           echo " 0 result";
       }
  
     
       if(isset($_REQUEST['delete'])){
        include "../student/db_connect.php";
        $sql = "DELETE FROM `students` WHERE `students`.`id` = {$_REQUEST['id']}";
        $result = mysqli_query($conn,$sql);
if($result){
    echo '<meta http-equiv="refresh" content = "0;URL=?deleted"/>';
}else{
    echo 'Unable to delete data';
}
    }


?>
 </div>


 <!-- Plus btn -->
 <div class ="box">
     <a href="../admin/addStudents.php" class="btn btn-danger">
         <i class="fas fa-plus fa-2x"></i>  
        </a>
    </div>
    
<?php
    include "../admin/admininclude/afooter.php";
 
 ?>