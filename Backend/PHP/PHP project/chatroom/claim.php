<?php
    $room =$_POST["room"];
    
 
    if(strlen($room)>20 or strlen($room)<2){
        $message = "Please choose a  number of character between 2 and 20  ";
 
        echo '<script language="javascript">';
          echo 'alert ("'.$message.'")';  //not showing an alert box.
          echo '</script>';
    }
elseif (!ctype_alnum($room)) {
    
    $message = "Please choose a  alphanumeric number ";
 
echo '<script language="javascript">';
  echo 'alert ("'.$message.'")';  //not showing an alert box.
  echo '</script>';
}
else{
    // connect to the database
    include 'db_connect.php';
   $sql =" SELECT * FROM `rooms` WHERE `roomname` ='$room'  ";
   $result = mysqli_query($conn,$sql);
   if($result){

       if(mysqli_num_rows($result)>0){
           $message = "Please choose a different room name , this room name is already exists";
           echo '<script language="javascript">';
           echo 'alert ("'.$message.'")';  //not showing an alert box.
        //    echo 'window.location ="http://localhost:81/PHP/PHP project/chatroom"';

           echo '</script>';
        }
        else{
            $sql1 = "INSERT INTO `rooms` ( `roomname`, `time`) VALUES (  '$room', current_timestamp());
       ";  
       $result1 = mysqli_query($conn,$sql1);
       if($result1){
           
        $message = " your chatroom is ready, lets start";
           
        echo '<script language="javascript">';
        //   echo 'alert ("'.$message.'")';  //not showing an alert box.
          echo 'window.location ="http://localhost:81/PHP/PHP project/chatroom/rooms.php?roomname=' .$room. '"';
          echo '</script>';
        // echo '<script language="javascript">';
        //   echo 'window.location = "http://localhost/chatroom/rooms.php?roomname=' .$room. '"';
        // echo '</script>';
        // header("rooms.php");
        }
        else{
            die("Connection fialed". mysqli_error($conn,$sql1 ));
        }
    }
    

    }
    else{
        echo "roomname is not selected  from database".mysqli_error($conn,$sql);
    }
   }
    

?>