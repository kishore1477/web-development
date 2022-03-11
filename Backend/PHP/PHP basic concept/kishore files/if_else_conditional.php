  <?php  
// $x = 1;
// $y = 3;
// if($x<$y){
//     echo "x is less  than y ";
// }
 
// echo "<br>";

// $x = 14;
// $y = 3;
// if($x>$y){
//     echo "x is greater than y ";
// }
// else{
//     echo "x is less than y";
// }
// echo "<br>";
// $x = 1;
// $y = 3;
// if($x>$y){
//     echo "x is greater than y ";
// }
// else{
//     echo "x is less than y";
// }
// echo "<br>";
// $x = 1;
// $y = 3;
// if($x<$y){
//     echo "x is  less than y ";
// }
// else{
//     echo "x is  greater than y";
// }
// echo "<br>";
// $x = 11;
// $y = 3;
// if($x<$y){
//     echo "x is  less than y ";
// }
// else{
//     echo "x is  greater than y";
// } -->

//  a company which select people which   eligible to drive car, bus, helicoptor  or any one 
// echo "<br> <br>";
// $Age =  100;
// //  $y = 34;
// if($Age>25){
//     echo "Your are eligible to drive car";
//     echo "<br>";
// }
// if($Age>35){
//     echo "Your are eligible to drive  bus";
//     echo "<br>";
// }
// if($Age>45){
//     echo "Your are eligible to drive   helicoptor";
//     echo "<br>";
// }
// if($Age>60){
//     echo " you are   eligible to drive  anything";
//     echo "<br>";
// }
// else{
//     echo "your are  not eligible to drive anything";
// }
// echo "<br>";
// //  a company which select people which   eligible to drive   any one vechile
// $Age =  21;
//  if($Age<10){
//      echo "your are kid  so that  you are not eligible to drive";
//      echo "<br>";
//     }
    
//     elseif($Age<25){
//      echo "Your are eligible to drive car";
//  }
//  elseif($Age<30){
//      echo "Your are eligible to drive  bus";
//      echo "<br>";
//     }
//     elseif($Age<45){
//         echo "Your are eligible to drive   helicoptor";
//         echo "<br>";
//     }
//     elseif($Age<60){
//         echo " you are   eligible to drive  anything";
//         echo "<br>";
//     }
     
//     else{
//      echo "your are  not eligible to drive anything";
//  }
//  echo "<br> <br> ";
// // weekday 
// $weekday = 6;
// if($weekday <=1){
//     echo "Today is monday  <br>";
// }
// elseif($weekday <=2){
//     echo "Today is  Tuesday  <br>";
// }
// elseif($weekday <=3){
//     echo "Today is  Wednesday  <br>";
// }
// elseif($weekday <=4){
//     echo "Today is  Thursday  <br>";
// }
// elseif($weekday <=5){
//     echo "Today is  Friday  <br>";
// }
// elseif($weekday <=6){
//     echo "Today is  Saturday  <br>";
// }
// elseif($weekday <=7){
//     echo "Today is  Sunday  <br>";
// }
// else {
//     echo "Please enter vilad  Weekday";
// }


// $choices= 4;
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

// $select =1;
// if($select<=1){
//     $i = 1;
//     for($i=1; $i<10; $i++){
//         echo "The ".$i."th is ".$i."<br>";
//     }
// // }
// echo "<br> <br>";
// $select =3;
// if($select<=1){
//     $i;
//     $n=2;
//     for($i=1; $i<11; $i++){
//         echo "The ".$n. "*".$i."=".$n * $i."<br>";
//     }
// }
// elseif($select<=2){
//     $i;
//     $n=3;
//     for($i=1; $i<11; $i++){
//         echo "The ".$n. "*".$i."=".$n * $i."<br>";
//     }
// }
// elseif($select<=3){
//     $i;
//     $n=4;
//     for($i=1; $i<11; $i++){
//         echo "The ".$n. "*".$i."=".$n * $i."<br>";
//     }
// }


// Write a program to check student grade based on marks
// Description:

// Write a program to check student grade based on the marks using if-else statement.

// Conditions:

// If marks are 60% or more, grade will be First Division.
// If marks between 45% to 59%, grade will be Second Division.
// If marks between 33% to 44%, grade will be Third Division.
// If marks are less than 33%, student will be Fail.

// $marks = 34;
// if($marks>=60){
//     $grade = "First division";

// }
// elseif($marks>=45){
//     $grade = "Second division <br>";

// }
// elseif($marks>=33){
// $grade ="Thrid division <br>";
// }
// else {
//     $grade = "fail";

// }
// echo "Student grade: $grade";



// Write a program to calculate Electricity bill in PHP
// Description:

// You need to write a PHP program to calculate electricity bill using if-else conditions.

// Conditions:

// For first 50 units – Rs. 3.50/unit
// For next 100 units – Rs. 4.00/unit
// For next 100 units – Rs. 5.20/unit
// For units above 250 – Rs. 6.50/unit
// $units = 334;
// if($units<=50){
//     echo "The electricity bill of first 50 units is ". $units*3.50;
// }
// elseif($units<=150){
//     echo "The electricity bill of  next 100 units is ". $units*4.00;
// }
// elseif($units<=250){
//     echo "The electricity bill of  next 100 units is ". $units*5.20;
// }
// else{
//     echo "The electricity bill of  above than 250  units is ". $units*6.50;

// }

// Write a PHP program to check whether a number is positive, negative or zero
// Description:
// Write a PHP program to check whether a number is positive, negative or zero.

// Instructions:
// You can use if else conditions.
// You should use appropriate PHP Operators.
// Also check if it not a numeric value.

$number = 0.777;
if($number>0){
    echo "Positive number";
}
elseif($number<0){
    echo "Negative number";

}
elseif($number==0){
    echo " number is zero";
}
else {
    echo "Please enter a numeric value";
}
?>