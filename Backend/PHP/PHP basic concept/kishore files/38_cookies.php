<?php
echo "Wellcome to cookies world <br> ";

$cookie_name = "cookies";
$cookie_value= "Books";
// cookies| session 
// Syntax to set   a  cookies 
setcookie("cookies", "Books", time() + (86400),  "/");




?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
        if(!$_COOKIE[$cookie_name]){
            echo "Cookies is not set";
        }
        else{
            echo $_COOKIE[$cookie_name];

        }
        

        ?>
</body>
</html>