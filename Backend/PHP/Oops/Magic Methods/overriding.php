<?php
// overriding the properties
//     class base{
//   public $name = "Educational website";
//     }
//     class drived extends base{
//         public $name = "Mathematics website";
//     }
//     $test = new base();
//     echo $test->name;
//     $test = new drived();
//     echo $test->name;

    // overriding the function
    class base{
public $name = "Kishore kumar";
function calc($a,$b){
     echo $a * $b;

}
    }
    class drived extends base{
        function calc($a, $b){
            echo $a +$b;

        }
    }
    $test = new base();
    echo $test->calc(2,3);

    $test = new drived();
    echo $test->calc(4,5);

?>