<?php
// get_class method
//     class myclass{
//  function name(){
//      echo "The class Name :".get_class($this)."<br>";
//  }
//     }
//     $obj = new myclass();
//    $obj->name();
//    echo "The class Name  is :".get_class($obj);

// get_parent_class method
// class abc{

// }
//     class myclass extends abc{
//  function name(){
//      echo "The  Parent class Name :".get_parent_class($this)."<br>";
//     }
// }
// $obj = new myclass();
// $obj->name();
// // echo "The  Parent class Name is  :".get_parent_class($obj)."<br>";
// echo "The  Parent class Name is  :".get_parent_class("myclass")."<br>";

// get_class_methods 
// class myclass {
// function __construct(){
//    print_r(get_class_methods($this)); // show all type access modifier method 
// }
// // function func1(){
// private function func1(){
    
// }
// function func2(){

// }
// }
//     $class_methods = get_class_methods("myclass"); // show only public method.
//     print_r($class_methods);
// $obj = new myclass();



//  get variable method
// class myClass{
//     public $var1;
//     public $var2 = "PHP";
//     public $var3 = 200;
//      private $var4;
//      function __construct(){
//          $this->var2 = "Javascript"; // this variable is not access at all in get_class_vars.
//          $this->var3 =  300;
//         //  print_r(get_class_vars(get_class( $this)));
//          print_r(get_class_vars( __CLASS__));  // when we insert  get_class_vars inside the class/ construct function it shows all type of access modifier  properties.
//      }
// }
// $obj = new myclass();
//  $class_vars = get_class_vars(get_class($obj));
//  print_r($class_vars);



// get object method
// class myClass{
//     public $var1;
//     public $var2 = "PHP";
//     public $var3 = 200;
//      private $var4;
//      function __construct(){
//          $this->var1 = "Kishori";  // these variable is also access in get_object_vars but not in get_class_vars.
//          $this->var2 = "Kishori kumari";
//          echo "<pre>";
//          print_r(get_object_vars($this));  // when we insert  get_class_vars inside the class/ construct function it shows all type of access modifier  properties.
//          echo "</pre>";
//         }
// }
// $obj = new myclass();
// echo "<pre>";
// $object_vars = get_object_vars( $obj);
// print_r($object_vars);
// echo "</pre>";


// get_called_class() and get_declared_classes() method 
// class abc{
//     static function test(){
// var_dump(get_called_class());
//     }

// }
// class xyz extends abc{

// }
//   abc::test();
//  xyz::test();
//  echo "<pre>";
//  print_r(get_declared_classes());
//  echo "</pre>";


// // get_declared_interfaces method.
// interface test{
// }
// echo "<pre>";
// print_r(get_declared_interfaces());
// echo "</pre>";


// // get_declared_traits method.
//  trait test{
// }
// trait test2{

// }
// class abc{
//     use test;
// }
// echo "<pre>";
// print_r(get_declared_traits());
// echo "</pre>";

// class_alias method 
class myclass{
static public $name = "kishore";
} 
class_alias("myClass", "mc");
// mc::name;
// $obj = new myClass();
// $obj->name= "Kishore";
// echo $obj->name;
// $obj1 = new  mc();


 

 

?>