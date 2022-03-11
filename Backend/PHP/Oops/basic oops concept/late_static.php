<?php
    class base2 {
         protected static $name= "kishore";
       static   function  show(){
           echo  static::$name."<br>"; // late binding
           echo   self::$name;
       }
    }
    class derived2 extends base2 {
        protected static $name ="Kumar";
        
    }
    // $test = new base2();
    // $test->show();
    // OR 
    // base2::show();
 echo "<br>";
 $test= new derived2();
 $test->show();
//  OR 
//  derived2::show();

?>