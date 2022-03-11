<?php
// sleep function is used for show  serialize array .
    class info{
        public $course = "PHP";
        private $first_name;
        private $last_name;
        public function showArray($fname, $lname){
      $this->first_name = $fname;
      $this->last_name = $lname;
        }
        function __sleep() {
            return array("first_name", "last_name");
            // return array("course");
        }
    }
 
    $obj = new info();
    $obj->showArray("Kishore", "Kumar");
    $srl= serialize($obj);  // serialize function is used convert object in array.
    print_r($srl);
    echo $srl;

?>