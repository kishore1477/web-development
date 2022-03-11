<?php
session_start();

echo "Please wait,  you are logging out... ";
session_destroy();
header("location: /forum/")

?>