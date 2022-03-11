<?php
    if(isset($_FILES['img'])){
echo "<pre>";
print_r($_FILES);
// move_uploaded_file($_FILES['img']['tmp_name'],'upload file/'.$_FILES['img']['name']);
echo "<pre/>";
 $file_name = $_FILES['img']['name'];
 $file_type = $_FILES['img']['type'];
 $file_tmp_name = $_FILES['img']['tmp_name'];
 $file_size = $_FILES['img']['size'];
 move_uploaded_file($file_tmp_name, "upload file".$file_name);
    }


?>
<html>
    <body bgcolor ='#E6E6FA'>
        <form method = 'post'enctype ='multipart/form-data'>
        Select file: <input type = 'file' name= 'img'> <br>
        <input type = "submit" name = "submit" value = "upload"/ > 

        </form>
    </body>

</html>