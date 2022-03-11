<?php
    class abc{
private $name ;
//  public $name ;
function __get($name){    // minimum one element/argument is required  in get function
    echo "You  cant not access non existing property or private property($name)";
}

    }
    $test = new abc();
    echo $test->name;
//   echo  $test->name ="Kishore kumar";



//     class abc{
//   private $data = ["name"=>"Kishore kumar", "course"=>"PHP", "fee"=>"2000"] ;
// function __get($key){
// if(array_key_exists($key , $this->data)){
// return $this->data[$key]."<br>";
// }
// else{
// echo "you can not access this property($key)";
// }
// }

//     }
//     $test = new abc();
// //    print_r($test->data);  
//  echo $test->name;
//  echo $test->course;
//  echo $test->fee;
?>