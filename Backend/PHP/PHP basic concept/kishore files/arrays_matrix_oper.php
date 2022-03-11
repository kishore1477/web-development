<?php
 
// $arr1 = array(
//  array(1, 1, 1),
//  array(1, 1, 1),
//  array(1, 3, 1),
// );
// $arr2 = array(
//  array(2, 3, 2),
//  array(2, 2, 2),
//  array(2, 2, 2),
// );
//  echo $arr1[2][1]."<br>";

// echo "Matrix A (3 x 3): <br>";
// for($i=0; $i<3; $i++)
// {
//  for($j=0; $j<3; $j++){
//   echo $arr1[$i][$j] . " ";
//  }
//  echo "<br>";
// }

// echo "<br>Matrix B (3 x 3): <br>";
// for($i=0; $i<3; $i++)
// {
//  for($j=0; $j<3; $j++){
//   echo $arr2[$i][$j] . " ";
// }
// echo "<br>";
// }
// $sum=0;

// for($i=0; $i<3; $i++)
// {
//  for($j=0; $j<3; $j++)
//  {
//   for($k=0; $k<3; $k++){
//   $sum += $arr1[$i][$k] * $arr2[$k][$j];
// //    $arr3[$i][$j] = $arr3[$i][$j] + $arr1[$i][$k] * $arr2[$k][$j];
//   }
//   $arr3[$i][$j] = $sum ;
//   $sum= 0;
//  }
// }

 

echo "Transpose of matrix "."<br>";
$arr = array(
 array(1, 1, 1),
 array(2, 2, 2),
 array(3, 3, 3),
);

echo "Matrix (3 x 3): <br>";
for($i=0; $i<3; $i++)
{
 for($j=0; $j<3; $j++)
  echo $arr[$i][$j] . " ";
 echo "<br>";
}
$trans;

for($i=0; $i<3; $i++)
{
 for($j=0; $j<3; $j++)
 {
//   $n = $arr[$i][$j];
//   $arr[$i][$j] = $arr[$j][$i];
//   $arr[$j][$i] = $n;
$trans[$i][$j]= $arr[$j][$i];
 }
echo "<br>";
}

echo "<br>Matrix Transpose: <br>";
for($i=0; $i<3; $i++)
{
 for($j=0; $j<3; $j++){
  echo $trans[$i][$j] ." ";
 }
 echo "<br>";
}





?>