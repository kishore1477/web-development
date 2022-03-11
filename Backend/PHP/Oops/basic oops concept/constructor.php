<?php

use arithematic_oper as GlobalArithematic_oper;

class arithematic_oper{
    public $a, $b,  $c;

     
     function __construct($a = 12, $b=23) // by default a= 12 and b=23
     {
         $this->a= $a;
         $this->b= $b;
    }
    function sum(){
         $this->c = $this->a + $this->b;
          echo  "The sum of a and b is ".$this-> c;

     }
    function  sub(){
         $this->c = $this->a - $this->b;
          echo "The substration of a and b is ".$this-> c;

     }

    }
    $c1 = new  arithematic_oper(2,3);
     $c1->sum()."<br>";
  echo "<br>";
  $c2 = new arithematic_oper(6,2);
  $c2->sub();
  echo "<br>";
  
      $c3 = new arithematic_oper();
      $c3 ->sum();

?>