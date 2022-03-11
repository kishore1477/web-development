<?php

// copy by value
    // $a =5;
    // $b = $a;  // impressed is used for storing adress in $b 
    // $b= 10;
    // echo $a;
    // echo $b; != echo $a;
// copy by refrence
    // $a =5;
    // $b = & $a;  // impressed is used for storing adress in $b 
    // $b= 10;
    // echo $a;
    // echo $b; = echo $a;

    class  student{
        public $name;
        public $course;
        function __construct($n) {
             $this->name = $n;   
        }
       
         
    }
    $student1 = new  student("kishore");
//  $student2 =   $student1;  // $student2 =   $student1 is by default  copy by refrence not value
 $student2 =  clone $student1;  //  by using clone in  $student2 =  clone $student1 , now clone keyword seperate $student1 and $student2.
 $student2->name = "Dileep kumar";
print_r($student1);
echo "<br>";
print_r($student2);

//  clone with object of two different classes.
    // class  student{
    //     public $name;
    //     public $course;
    //     function __construct($n) {
    //          $this->name = $n;   
    //     }
    //     function setName(course $c) {
    //          $this->course = $c;   
    //     }
    //     function __clone(){
    //         $this->course = clone $this->course;
    //     }
    // }
    // class course {
    //     public $cname;
    //     function __construct($cn){
    //         $this->cname = $cn; 
    //     }
    // }
//  $student1 = new  student("kishore");
//  $course1 = new course("PHP");
// $student1->setName($course1);
// //  $student2 =   $student1;  // $student2 =   $student1 is by default  copy by refrence not value
//  $student2 =  clone $student1;  //  by using clone in  $student2 =  clone $student1 , now clone keyword seperate $student1 and $student2.

//  $student2->name = "Dileep kumar";
//  $student2->course->cname = "Python"; // =
// //  $course2 = new course("Python"); //(=
// // $student2->setName($course2);   //=)
// //  echo $student1->name;
//  echo "<br>";
// //  echo $student2->name;
 


// print_r($student1);
// echo "<br>";
// print_r($student2);
?>