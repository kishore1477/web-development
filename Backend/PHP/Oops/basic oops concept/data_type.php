<?php
    // function sum(int $n){
    //     echo $n + 1;
    // }
    // sum(23);
    // sum("Hi");
    
    // pass array through the function by using foreach loop.
//     function show(array $fruit){
//          foreach ($fruit as $value) {
//               echo $value ."<br>";
//          }

//     }
//     $fruit = ["Apple", "Orange" , "Mango","Lemon"];
// show($fruit);


// pass class object in function.
// class hello {
//     function sayhello(){
//         echo "Hello everyone";
//     }
// }
// class bye{
//     function  saybye(){
//         echo "bye bye everyone";
//     }
// }
// function wow( hello $c){
//     $c->sayhello();
// }
// // $test = new bye();
// $test = new  hello();
// wow($test);



class  school {
    function  getNames( student $name){
        echo "<ul style >";
        foreach ($name->Names() as  $value) {
           echo "<li>".$value. "</li>";
        }
        echo "</ul>";
    }
}
class  student {
    function   Names(){
       return ["Kishore","Amrat","Kapil"];
    }
}
class library{

}
$lib = new library();
 $stu = new student();
$sch = new school();
// $sch->getNames($stu);
$sch->getNames($stu);


?>