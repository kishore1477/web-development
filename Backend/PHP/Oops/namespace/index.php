<?php

use pro\product;

require "product.php";
    require "test.php";

    // $obj =new test\product();
    echo "<br>";
    // $obj =new  pro\product();
    use  pro\kishore\jaipal\patia as cmd;
    // $obj =new    pro\kishore\jaipal\patia\product();
    $obj =new     cmd\product();
    echo "<br>";
    function wow(){
        echo "Wow from  index file";
    }
    // wow();
    echo "<br>";
    // pro\wow();

?>