<?php
// isset function is used for checking thr existance of property in class. 
//     class student {
//         public $name;
//         private $age;
//         private $course;
//        public  function  show($a, $c){
//         $this->age = $a;
//          $this->course = $c;
//         }
//         function __isset($nam)
//         {
//                echo isset($this->$nam);
//         }
//     }
//   $obj = new student();
// //   for public 
// //   $obj->name = "kishore";
// //   echo  $obj->name;
// //   echo isset($obj->name);

// //   for private 
// // $obj->show(12, "PHP");
// $obj->show("12", "PHP");
// echo isset($obj->course);

// echo isset($obj->age);
// echo isset($obj->city);


// for access array element and checking the existance of the element.

class student {
    public $name;
    private $age;
    private $course;
    private $detail = ["city" => "Karachi", "Country"=>"Pakistan"];
   public  function  show($a, $c){
    $this->age = $a;
     $this->course = $c;
    }
    function __isset($nam)
    {
           echo isset($this->detail[$nam]);
    }
    
}
$obj= new student();
// $obj->city;
// echo isset($obj->city);
// echo isset($obj->country);
echo isset($obj->Pakistan); // no output show 
?>