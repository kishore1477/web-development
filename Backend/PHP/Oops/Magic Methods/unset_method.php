<?php
// unset method is used for disable the properties of class.
    class student{
        public $course = "PHP";
        private $first_name;
        private $last_name;
        function showName($fname, $lname){
               $this->first_name =$fname;  // echo/return
                $this->last_name =$lname;  // echo/return
        }
        function __unset($property){
            unset($this->$property);
        }
    }
$obj = new student();
// for public 
// unset($obj->course);
// echo $obj->course;
// echo $obj->course="PHP";
$obj->showName("Kishore", "Kumar");
// unset($obj->first_name);
// unset($obj->last_name);
 empty($obj->last_name);
print_r($obj);
// echo $obj->first_name;

?>