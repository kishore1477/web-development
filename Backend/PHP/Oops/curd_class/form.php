 <?php
include "database_connect.php";
$obj = new database();


 ?>
 

 
 
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Form</title>
 </head>
 <body>
     <form action="save_form_data.php" method="POST">
<label for="">Name</label>
<input type="text" name = "sname">
 <br> <br>
 <label for="">Age</label>
 <input type="number" name = "sage">
 
 <br> <br>
 
 <label for=""> City</label>
 <select name="scity" id="">
<?php
    $obj->select("citytb");
    $result =$obj->getResult();
    foreach ($result as list("cid"=>$id , "cname"=>$city)) {
      echo "  <option value='$id'>$city</option>";
        
    }

?>


    </select>
    <br> <br>
 <button type="submit" >Save</button>

     </form>
 </body>
 </html>