<?php
    // check for existance of class.
    class myClass{

    }
    if(class_exists("myClass")){
        echo "This class is exists";
    }
    else{
        echo "This class is not exists";
    }

    // check for existance of  property in class.
    class myClass{
     public $name;
    }
    if(property_exists("myClass", "name")){
        echo "This  property is exists";
    }
    else{
        echo "This  property is not exists";
    }
    // check for existance of   methods in class.
    class myClass{
     public $name;
     function  myMethod(){

     }
    }
    $obj = new myClass();
    if(method_exists($obj, "myMethod")){
        echo "This   method is exists";
    }
    else{
        echo "This   method is not exists";
    }
    // check for existance of    trait .
    trait myTrait{
    }
    class myClass{
        use myTrait;
      
    }
    $obj = new myClass();
    if(trait_exists(  "myTrait","myClass")){
        echo "This    trait is exists";
    }
    else{
        echo "This    trait is not exists";
    }
    // check for existance of   interface .
      interface myInterface{
          function interMethod();
      }
     
     
    if(interface_exists("myInterface")){
        echo "This     interface is exists";
    }
    else{
        echo "This    interface  is not exists";
    }
    // check for existance of  object .
      class myClass{

      }
      $obj = new myClass();
    if(is_a($obj, "myClass")){
        echo "This  object is exists " ;
    }
    else{
        echo "This  object is not exists ";
    }
    // check for existance of  object of child class from parent class .
      class parentClass{

      }
      class childClass extends parentClass{

      }
      $obj = new  childClass();
    if(is_subclass_of($obj, "parentClass")){
        echo "This  object is exists " ;
    }
    else{
        echo "This  object is not exists ";
    }

?>