<?php
    //   ajax_load.php for insert data
//     $conn = mysqli_connect("localhost","root","", "test") or Die ("Connection Failed");

// $sql = "SELECT * FROM  faculty";
// $result  = mysqli_query($conn, $sql) or Die ("Sql query failed");
// $output = "";
// if(mysqli_num_rows($result)>0){
//     $output = '<table border = "1" width = "100%" cellspacing = "0" cellpanding = "10px">
//     <tr>
//     <td>Id</td>
//     <td> First Name</td>
//     <td> Last Name</td>
//     </tr>';
//     while($row = mysqli_fetch_assoc($result)){
//     $output  .=  "<tr><td> {$row['id']}</td> <td> {$row['first_name']}</td>  <td> {$row['last_name']}</td></tr>";
//     }
//     $output .= "</table>";
//     echo $output;
//     mysqli_close($conn);
// }else{
//     echo "No record found";
// }


// ajax_load.php for delete data
    $conn = mysqli_connect("localhost","root","", "test") or Die ("Connection Failed");

$sql = "SELECT * FROM  faculty";
$result  = mysqli_query($conn, $sql) or Die ("Sql query failed");
$output = "";
if(mysqli_num_rows($result)>0){
    $output = '<table border = "1" width = "100%" cellspacing = "0px">
    <tr class = "table-heading">
    <td>Id</td>
    <td> First Name</td>
    <td> Last Name</td>
    <td>  Edit</td>
    <td  > Delete</td>
    </tr>';
    while($row = mysqli_fetch_assoc($result)){
    $output  .=  "<tr><td> {$row['id']}</td> <td> {$row['first_name']}</td>  <td> {$row['last_name']}</td><td>  <button class = 'edit-btn' data-eid= ' {$row['id']}'>  Edit</button></td> <td>  <button class = 'delete-btn' data-id= ' {$row['id']}'> Delete</button></td></tr>";
    }
    $output .= "</table>";
    echo $output;
    mysqli_close($conn);
}else{
    echo "No record found";
}


?>