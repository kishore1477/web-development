<?php
// Note: A function name must start with a letter or an underscore. Function names are NOT case-sensitive.
// function processMarks($marksArr){
//     $sum=0;
//     // $i = 1;
// foreach ($marksArr as  $value) {
//     $sum +=$value;
//     // $i++;
// }
// return $sum;
// // return $sum/$i;
// }
// $kishore = [89,98, 96, 93, 92,91];
// $kishoreTotalMarks = ProcEssMarks($kishore);
// echo " The total marks of kishore out of 600 is $kishoreTotalMarks <br> ";
// // echo " The  average marks of kishore is $kishoreTotalMarks <br> ";

// $Amrat = [78, 89, 98, 90, 78,67];
// $amratTotalMarks = processMarks($Amrat);
// echo "The total marks of Amrat out of 600 is $amratTotalMarks";
// // echo "The average of Amrat marks is  $amratTotalMarks";
// echo  "<br> <br>";

// function familyName($fname){
//     echo " $fname Village patia  <br> ";
// }
// familyName("Kishore kumar ");
// familyName("Dileep kumar");
// familyName("Suresh kumar");
// familyName("Koshalia kumari");
// familyName("Kajomal");
// familyName("Lachhmi ");


// function table($call){

//     switch ($call) {
//         case 1:
//             echo "  'vehicle'  <br>";
//             $arr = array("motorcycle", "car", "helicoptor", "bus");
//             foreach($arr as  $value) {
//                echo "$value <br>";
//             }
//             break;
//         case 2:
//             echo "Fruits <br>";
//             $arr = array("Mango", "Orange", "Lemon","Staberi");
//             foreach($arr as  $value) {
//                echo "$value <br>";
//             }
//             break;
        
//         default:
//             echo " 'Mobile' <br>";
//             $arr = array("Samsung", "Vegotel", "Infinix","Itel", "Nokia","Vivo", "Iphone");
//             foreach($arr as  $value) {
//                echo "$value <br>";
//             }
//             break;
//     }
// }
// $call = 1;
// table($call);

// echo "<br> <br>";
//   // Operation

//   function numtable($select){
//     switch ($select) {
//         case 1:
//             $i;
//             $n=2;
//             for($i=1; $i<11; $i++){
//                 echo "The ".$n. "*".$i."=".$n * $i."<br>";
//             }
//             break;
//         case 2:
//             $i;
//             $n=3;
//             for($i=1; $i<11; $i++){
//                 echo "The ".$n. "*".$i."=".$n * $i."<br>";
//             }
//             break;
//         case 3:
//             $i;
//             $n=4;
//             for($i=1; $i<11; $i++){
//                 echo "The ".$n. "*".$i."=".$n * $i."<br>";
//             }
//             break;
        
//         default:
//         $i;
//         $n=5;
//         for($i=1; $i<11; $i++){
//             echo "The ".$n. "*".$i."=".$n * $i."<br>";
//         }
//             break;
    
//             }
//   }
//   $select = 2;
//   numtable($select);

//  echo "<br> <br>";
// function operation($choices){
  
// if($choices <=1){
//     $a = 1;
//     $b = 2;

//     echo "The sum of a and b is ". $a+$b.  "<br>";
// }
// elseif($choices <=2){
//      $a = 11;
//     $b = 2;

//     echo "The  subtraction of a and b is ". $a-$b.  "<br>";
// }
// elseif($choices <=3){
//      $a = 11;
//     $b = 2;

//     echo "The  multiplication of a and b is ". $a*$b.  "<br>";
// }
// elseif($choices <=4){
//     $a = 12;
//     $b = 2;

//     echo "The  division of a and b is ". $a/$b.  "<br>"; 
// }
// elseif($choices <=5){
//     $a = 14;
//     $b = 2;

//     echo "The  remindar of a and b is ". $a%$b.  "<br>"; 
// }
 
// else {
//  echo "Your search is  out of  control please enter eligible choice";
// }
// }

// $choices =2;
// operation($choices);

// // two parameter
// function sum( $a,  $b){
//   return  $a +$b ;
// }
// echo "The sum of a and b is ";
//  echo sum(2, 3);
// echo "<br> <br> ";

//  function twopara($name, $caste){
// return $name.$caste ."<br>";
//  }
//   echo twopara("Kishore kumar ", " Jaipal");
//  // three parameter
//  function Threepara($village, $taluka , $district){
//      return $village . $taluka . $district. "<br>";
//  }
//   echo Threepara("Patia ", " Nangarparkar ", " Tharparkar ");
//   echo "<br> ";

// //   function can not run duplicate variable  as show below
// //   function  test($a, $b, $b){
// //       $c = $a+$b+$b;
// //       return $c;
// //   }
// //    echo test(1,2,3);
// echo "<br> <br>";
//   function  test($a, $b, $c){
//       $d = $a+$b+$c;
//       return $d;
//   }
//  echo "The sum of a and b is ". test(1,2,3);

//    $height = 23 is by default value of function 

// function setheight($height =23){
//     echo $height ."<br> <br>";
// }
// setheight(12);
// setheight(122);
// setheight();
 
 
?>