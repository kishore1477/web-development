<?php
include "database_connect.php";
$obj = new database();
$join = "citytb on students.city = citytb.cid";
$colname = "students.id, students.name,students.age, citytb.cname";
$limit = 2;
// $obj->select('students', "id,name,age,cname", $join,   null, null,2);
$obj->select('students',  "*", $join,   null, null,$limit);
 $result = $obj->getResult();
 echo "<pre>";
 print_r($result);
 echo "</pre>";
 echo "<table border ='1' width = '500px'>
 <tr>
             <th>Id </th>
             <th> Name </th>
             <th> Age </th>
             <th> City </th>
            


 </tr>
 
 ";
 foreach ($result as  list("id"=>$id, "name"=>$name, "age"=>$age, "cname"=>$cname)) {
     echo " <tr> <td>$id </td>   <td>$name </td> <td>$age </td>  <td>$cname </td>  </tr>";
    }
    echo "</table>";
$obj->pagination('students', $join, null,$limit);


?>