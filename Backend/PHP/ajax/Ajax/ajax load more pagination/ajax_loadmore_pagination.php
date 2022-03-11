<?php
    $conn = mysqli_connect("localhost","root","","test") or die("Connection failed");
    $limit = 4;
    if(isset($_POST["page_no"])){
        $page = $_POST["page_no"];
        // echo $page;
    }
    else{
        $page = 0;
    }
     

     $sql = "SELECT * FROM faculty LIMIT {$page}, {$limit}";
    $result = mysqli_query($conn, $sql) or die("Sql query unsuccessful");
     $rec = mysqli_num_rows($result);
    $output ="";
    if(mysqli_num_rows($result) > 0){
        $output .= '<tbody>';
        while($row = mysqli_fetch_assoc($result)){
            
            $last_id = $row["id"];
            // echo $last_id;
            $output .= " <tr>
            <td   align='center'> {$row["id"]}</td>
            <td> {$row["first_name"]}   {$row["last_name"]}</td>
            
            </tr>";
            
        }
        $output .= "</tbody>
        <tbody id='pagination'>
          <tr>
            <td colspan='2'>
              <button id='ajaxbtn' data-id='{$last_id}'>Load More</button>
            </td>
          </tr>
        </tbody>";  
      
    
 
        echo $output;
       
    }else{
        echo "";
    }
mysqli_close($conn)





?>