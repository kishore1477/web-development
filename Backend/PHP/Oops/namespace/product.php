<?php
namespace pro\kishore\jaipal\patia;

    class product{
        function __construct()
        {
            // echo "class called from product namespace";  
            $obj = new  \test\product;
        }
    }
function wow(){
    echo "Wow from product file";
}


?>