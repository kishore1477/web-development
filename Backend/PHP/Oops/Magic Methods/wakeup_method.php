<?php
    
        class info{
            public $course = "PHP";
            private $first_name;
            private $last_name;
            private $conn;
            public function showArray($fname, $lname){
          $this->first_name = $fname;
          $this->last_name = $lname;
            }
            function __construct() {
                $this->conn =mysqli_connect();
            }
            function __sleep() {
                mysqli_close($this->conn);
                return array("first_name", "last_name");
                // return array("course");
            }
            function __wakeup(){
                $this->conn =mysqli_connect();
                echo "This is wakeup method  <br>";
            }
        }
     
        $obj = new info();
        $obj->showArray("Kishore", "Kumar");
        $srl= serialize($obj);  // serialize function is used convert object in array.
        // print_r($srl);
        // echo $srl;
        $us =unserialize($srl);
        // echo $us;
        print_r($us);
    
  

?>