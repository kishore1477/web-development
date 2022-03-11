<?php

// use student as GlobalStudent;
//  call function is used  for access private function out of class.
// by taken argument out of class.

class student{
        private $first_name;
        private $last_name;
       private  function setName($fname, $lname){
        echo  $this->first_name = $fname;
       echo   $this->last_name = $lname;
        }
    public function __call($method, $args){
    //  echo "This is private or non-existing method : $method";
    //  print_r($args);
    if(method_exists($this, $method )){
          call_user_func_array([$this,$method], $args);
    }
    else{
  echo "This is Non-existing or private : $method";
    }
    }
    }
    $obj = new   Student();
    //  echo  $obj->setName();
         $obj->setName("Kishore", "kumar");

?>