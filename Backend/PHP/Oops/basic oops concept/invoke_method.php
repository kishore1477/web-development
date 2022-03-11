<?php

// invoke function is call automatically when object call like that $obj().
class calculation{
    public $a, $b;
    function __construct($a, $b) {
        $this->a= $a;
        $this->b= $b;
    }
    function hello(){
      echo   $this->a + $this->b;
    }
    function __invoke(){
      echo "The sum of a and b is :" . $this->a + $this->b ."<br>";
      echo "The  substration of a and b is :" . $this->a - $this->b ."<br>";
      echo "The  multiplication of a and b is :" . $this->a * $this->b ."<br>";
      echo "The  division of a and b is :" . $this->a / $this->b ."<br>";
    }
}
$obj1 = new calculation(10, 20);
//    $obj->hello();
$obj1(); 


?>