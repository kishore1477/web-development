

<?php
   //  if(!isset($_SESSION)){
   //    session_start();
   // }
   include "../admin/admininclude/aheader.php";
   // include "../student/db_connect.php";     
   
   // if(isset($_SESSION['admin_loggedin'])){
   //     $_SESSION["adminlogemail"] = $adminlogemail;
   //    //  echo json_encode(" work");
   //    }else{
   //       echo "<script >  location.href = '../index.php';</script>";
   //       // echo json_encode(" not work");
   // }
   
 
 ?>
         <div class="col-sm-8">
            <div class="row text-center">
               <div class="col-sm-4">
                  <div class="card text-white bg-dark mt-5" style="max-width:18rem;">
                     <div class="card-header">
                        Courses
                        <div class="card-body">
                           <h4 class="card-title">
                              5
                              <a href="#" class="btn text-white">View</a>
                           </h4>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="card text-white bg-success mt-5" style="max-width:18rem;">
                     <div class="card-header">
                        Courses
                        <div class="card-body">
                           <h4 class="card-title">
                              5
                              <a href="#" class="btn text-white">Students</a>
                           </h4>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="card text-white bg-info mt-5" style="max-width:18rem;">
                     <div class="card-header">
                        Courses
                        <div class="card-body">
                           <h4 class="card-title">
                              5
                              <a href="#" class="btn text-white"> Sold</a>
                           </h4>
                        </div>
                     </div>
                  </div>
               </div>
             

<div class="text-center mx-5 mt-5">
   <p class="bg-dark text-white p-2"> Ordered Courses</p>
   <table class="table">
       <thead>
          <tr>
             <th scope = "col" >Orderd ID</th>
             <th scope = "col" >Courses ID</th>
             <th scope = "col" >Student Email</th>
             <th scope = "col" >Order Date</th>
             <th scope = "col" >Amount</th>
             <th scope = "col" >Action</th>
          </tr>
       </thead>
       <tbody>
          <tr>
             <th scope = "row">100</th>
             <td>22</td>
             <td>kishore@gmail.com</td>
             <td>14/1/2022</td>
             <td>2000</td>
             <td><button type="submit" class = "btn btn-secondary" value="Delete"name = "delete"><i class = "far fa-trash-alt"></i></button></td>
          </tr>
       </tbody>
   </table>
</div>







               
            </div>
         </div>
      </div>
   </div>


   

   
 <?php
    include "../admin/admininclude/afooter.php"
 
 ?>