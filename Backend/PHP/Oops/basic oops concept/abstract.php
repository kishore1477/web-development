<?php

// these three  condition for abstract class
   abstract  class base {       // codition 1
        public $name = "Kishore kumar";
       
        abstract protected function  calc($a,$b);  // codition 2
    }
    class drived extends base {
         public function  calc($a,$b){  // condition 3
            echo $a * $b;
            // echo "Hello";
        }
    }

$obj1 = new drived();
$obj1-> calc(10, 3);

    // $obj = new base();
    // $obj-> calc(2, 3);

?>