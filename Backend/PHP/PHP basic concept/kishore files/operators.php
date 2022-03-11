<?php
// operators in php 
// 1.Arithematic operators
// 2.Assignment operators
// 3.Coparision  operators 
// 4.logical operators 
// 1.Arithematic operators
// $a = 12;
// $b = 3;
// echo "for a+b ". "the result is ". $a+$b;
// echo "<br>";
// echo "for a-b ". "the result is ". $a-$b;
// echo "<br>";
// echo "for a*b ". "the result is ". $a*$b;
// echo "<br>";
// echo "for a/b ". "the result is ". $a/$b;
// echo "<br>";
// echo "for a%b ". "the result is ". $a%$b;
// echo "for a**b ". "the result is ". $a**$b;

// echo "<br>";
// 2. Assignment operators
// echo "for $ a += 2". " the result is".$a +=2;
// echo "<br>";
// echo "for $ a -= 2". " the result is".$a -=2;
// echo "<br>";
// echo "for $ a *= 2". " the result is".$a *=2;
// echo "<br>";
// echo "for $ a /= 2". " the result is".$a /=2;
// echo "<br>";
// echo "for $ a %= 2". " the result is".$a %=2;
//    OR
// $a += 4;
// echo "for a ". "the result is ". $a;
// echo "<br>";
// $a -= 4;
// echo "for a ". "the result is ". $a;
// echo "<br>";
// $a *= 4;
// echo "for a ". "the result is ". $a;
// echo "<br>";
// $a /= 4;
// echo "for a ". "the result is ". $a;
// echo "<br>";
// $a %= 4;
// echo "for a ". "the result is ". $a;
// echo "<br>";

// 3.comparision operators
// echo "for $ a == $ b " . "the result is ";
// echo var_dump($a==$b);
// echo "<br>";
// echo "for $ a >$ b " . "the result is ";
// echo var_dump($a>$b);
// echo "<br>";
// echo "for $ a >= $ b " . "the result is ";
// echo var_dump($a>=$b);
// echo "<br>";
// echo "for $ a < $ b " . "the result is ";
// echo var_dump($a<$b);
// echo "<br>";
// echo "for $ a <=$ b " . "the result is ";
// echo var_dump($a<=$b);
// echo "<br>";
// $p =2;
// $q=2;
// echo "for $ p!=$ q " . "the result is ";
// echo var_dump($p!=$q);
// echo "<br>";
// echo "for $ p <>$ q " . "the result is ";
// echo var_dump($p<>$q);
// echo "<br>";
$x = 5;  
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y
 echo "<br>";
// 4. logical operators
$m = true;
$n =false;
echo "for m and n ". "the result is ";
 echo var_dump($m and $n). " <br>";
echo "for m && n ". "the result is ";
 echo var_dump($m && $n). " <br>";

echo "for m or n ". "the result is ";
 echo var_dump($m or $n). " <br>";
echo "for m || n ". "the result is ";
 echo var_dump($m || $n). " <br>";

echo "for ! n ". "the result is ";
 echo var_dump( ! $n). " <br>";




?>