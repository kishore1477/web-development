

<?php
    if(isset($_FILES["img"])){
         
        echo "<pre>";
        print_r($_FILES['img']);
        echo '</pre>';

         $name = $_FILES['img']['name'];
        echo $_FILES['img']['type'];
       echo $tmp_name = $_FILES['img']['tmp_name'];
        echo $_FILES['img']['size'];
        echo $_FILES['img']['error'];
        move_uploaded_file($tmp_name,"upload-img/".$name);

    }

?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload to database</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="img" id="img"> <br>
      <button type="submit">Submit</button>
    </form>
</body>
</html>