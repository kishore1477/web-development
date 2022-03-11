<?php
echo "while loop in php <br>";
// echo 1 ."<br>";
// echo 2 ."<br>";
// echo 3 ."<br>";
// echo 4 ."<br>";
//  $i=1;
// while($i<10){
// echo "The value of i is ";
// echo $i ."<br>";
// i++;
// // $i += 2;
// }
// print simply number 
// $choose= 12; 
// switch ($choose) {
//     case 1:
//         $i=1;
//         while($i<10){
//         echo "The value of i is ";
//         echo $i ."<br>";
//         $i++;
//         // $i += 2;
//         }
//         break;
//     case 2:
//         $i=1;
//         while($i<=15){
//         echo "The value of i is ";
//         echo $i ."<br>";
//         $i++;
//         // $i += 2;
//         }
//         break;
    
//     default:
//     $i=1;
//     while($i<20){
//     echo "The value of i is ";
//     echo $i ."<br>";
//     $i++;
//     // $i += 2;
//     }
//         break;
// }

// number table 
$choose= 2; 
switch ($choose) {
     case 1:
        $i=1;
        $n=2;
        while($i<11){
echo "The".$n."*".$i."=".$n*$i."<br>";
// $i++;
$i +=2; 
        }
        break;
     case 2:
        $i=1;
        $n=3;
        while($i<11){
echo "The".$n."*".$i."=".$n*$i."<br>";
$i++;
// $i +=2; 
        }
        break;

}
// specially while loop is used for updation

$i=0;
while($i<14){
        echo "The number is".$i."<br>";
        $i +=2;
        echo "<br>";
        $i +=3;
}





// do while loop

// loop executed at least one time
// $i = 20;
$i =1;
do {
         echo "The number is $i <br>";
         $i+=2;
} while ($i<= 10);

?>