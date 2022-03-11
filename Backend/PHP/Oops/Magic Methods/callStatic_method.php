<?php
// callstatic function is used for access private method in static class
    class faculty{

         private static $Full_name;
         private static $Tec_course ;
         private static function  showStatic($name, $course){
            echo  self::$Full_name=$name ;
            echo  self::$Tec_course=$course;
        }
        public  static function __callStatic($method, $args)
         {
            // echo "This is private method: $method";                       
            if(method_exists(__CLASS__, $method )){
                call_user_func_array([__CLASS__, $method], $args);
          }
          else{
        echo "This is Non-existing or private : $method";
        }
          }
        }
    
   faculty::showStatic("Kishore", "PHP");
//    faculty::$name;
?>