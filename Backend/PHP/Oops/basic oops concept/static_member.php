<?php

// any  class called static if  there properties and method are static . 
// :: scope resulation operator
    class base1{
        public static $name = " dileep kumar";
       public static function   show($n){
            echo self::$name =$n;
        }
    }
    class derived1 extends base1{
        public static function get($n){
            // echo parent::$name = $n;
            echo  self::$name = $n;
        }
    }

// $obj = new base(); 
// $obj->$name;
// $obj->show();
//  echo base1::$name;
// base1::show("Jaipal ");

// derived1::get("patia");




echo "<br>";
class parent1{
    public static  $name1 = "Kamlesh kumar";
    public static  $country = "Pakistan";
    static function hi(){
        echo self::$country;
    }
 function __construct(){
     echo self::hi();
 }
 
     
 }
class  child1 extends parent1{
       public static function see(){
        //    echo  self::$name1;
           echo   parent::$name1;
       }
       function __construct(){
        echo self::hi();
        echo self::see();
    }

}
$test = new parent1();
$test = new child1();
// parent1::hi();

// child1::see();
// // OR
// $test = new child1();
// $test->see();
?>