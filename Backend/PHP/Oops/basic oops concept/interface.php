<?php
    
interface A{
    // public $name;  //  properties are not include in interface 
    // we only declare method in interface not implement and  access modifier  are not used in methods but  method used public as by default
    function intf1($a , $b);
}
interface C {
   function intf2($c, $d);
 function intf3();
}

// we must implements above declared method in interface A and interface C  in below class B  (implement all method )  and methods used only public modifier  
class B implements A,C{
 function intf1($a,$b){
 echo $a + $b ;
 }
     function intf2($c, $d){
 echo $c - $d;
 }
 function intf3(){
     echo "Hello";
 }
}
$obj1 = new B();
$obj1->intf1(1,3);
 echo "<br>";
 $obj1->intf2(13,4);
 echo "<br>";
 $obj1->intf3();
?>