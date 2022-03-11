<?php
namespace myNameSpace;
//  the name of magic constant is insensitive.
    echo "The line number is :" . __LINE__  ."<br>";
    echo "The line number is :" . __line__  ."<br>";
    echo "The  file  path is :" . __file__  ."<br>";
    echo "The  file  path is :" . __FILE__  ."<br>";
    echo "The  Path of directory is :" . __DIR__ ."<br>";
    echo "The  Path of directory is :" . __dir__ ."<br>";
function myfunction(){ 

    echo "The  function name is :" . __FUNCTION__ ."<br>";
    echo "The  function name is :" . __function__ ."<br>";
}
    myfunction();
    trait mytrait{
        function getTraitName(){
            return "The name of trait is ". __TRAIT__;
        }
    }
    class observe{
        use mytrait;
        function test(){
            // return " The name of class is ".  __CLASS__;
            // return " The name of  method is ".  __METHOD__;
            // return " The name of  function is ".  __function__;
            // return " The name of   namespace  is ".  __namespace__;
        }
    }
    $obj = new observe();
    //  echo $obj->test();
     echo $obj-> getTraitName();

?>