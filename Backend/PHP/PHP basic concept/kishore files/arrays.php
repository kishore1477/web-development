<?php
// // writting arrays element we use array() function 
// $arr = array("Kishore kumar ", "  Dileep Kumar "," Chamanlal "," Amrat ");
// echo $arr[0]."<br>";
// echo $arr[1]."<br>";
// echo $arr[2]."<br>";
// echo $arr[3]."<br>";
// echo "I like ".$arr[0].$arr[1].$arr[2]."and".$arr[3] . "<br>";
// // The count() function is used to return the length (the number of elements) of an array:
// echo count($arr);
// echo "<br> <br>";

// // In PHP, there are three types of arrays:

// // Indexed arrays - Arrays with a numeric index
// // Associative arrays - Arrays with named keys
// // Multidimensional arrays - Arrays containing one or more arrays

// // indexed arrays
// // there are  two ways to create indexed arrays 
// // created manually
// $arr = array("Mango","Banana","Orange","Lemon","Watermillion");
// echo $arr[0]."<br>";
// echo $arr[1]."<br>";
// echo $arr[2]."<br>";
// echo $arr[3]."<br>";
// echo $arr[4]."<br>";
// $arrlength =count($arr);
// echo $arrlength  ."<br> <br>";

// // created by loops 
// // apply for loop 
// echo "By using for loop";
// for ($i=0; $i < $arrlength; $i++) { 
//     echo $arr[$i]."<br> <br>";
    
// }
// echo "By using foreach loop";
// // apply foreach loop 
// foreach ($arr as  $value) {
//     echo $value."<br> <br>";
// }

 // associative arrays 
//  echo "Manually print associative arrays";
//  $arr = array("Name"=> "Kishore kumar", "Village" => "Patia", "Taluka" => "Nangarparkar", "District" =>"Tharparkar");
//  echo "<br> <br>";
// //  to access kishore kumar 
// //  echo " Name of Mr: ". $arr["Name"];
// //  to access name 
//  $keys  = array_keys($arr);
//  echo $keys[0]."<br>";
//  for ($i=0; $i < 4; $i++) { 
//     echo $keys[$i]."<br>";
//  }

//  echo  $arr["Name"]. "<br>" .$arr["Village"] . "<br>".$arr["Taluka"]. "<br>" .$arr["District"];
// echo "<br> <br> ";

// echo "by applying loops " . "<br>";
// foreach ($arr as $key => $value) {
//     echo $value."<br>";
// }


// // multidimensional  array
// $arr = array(
//     array(11,12,13,14),
//     array(21,22,23,24) ,
//     // array(31,32,33,34),  // array(31,32,33,34,56),
//       array(31,32,33,34,56),
//     array(41, 42, 43, 44)     //array(41, 42, "43", 44) 
     
// );
// $arr1 = array(
//     array(11,12,13,14),
//     array(21,22,23,24) ,
//     // array(31,32,33,34),  // array(31,32,33,34,56),
//       array(31,32,33,34,56),
//     array(41, 42, 43, 44)     //array(41, 42, "43", 44) 
     
// );
// $arr2 = array(
//     array(11,12,13,14),
//     array(21,22,23,24) ,
//     // array(31,32,33,34),  // array(31,32,33,34,56),
//       array(31,32,33,34,56),
//     array(41, 42, 43, 44)     //array(41, 42, "43", 44) 
     
// );
// $a = array_sum($arr1[1]);
// $b = array_sum($arr2[1]);
// $c = $a + $b;
// echo $c ."<br>";
 
// // echo var_dump($arr)."<br>";
// echo var_dump($arr[0])."<br>";
// echo var_dump($arr[1])."<br>";
// echo var_dump($arr[2])."<br>";
// echo var_dump($arr[3])."<br>";
//  // by using for loop we can access the  data type of array
// for ($i=0; $i < count($arr); $i++) { 
//     echo var_dump($arr[$i])."<br>";
//     // echo $arr[$i]."<br>";
// }
// // echo $arr[0][1]."<br>";
// echo $arr[1][3]."<br>";
// // echo $arr[0][2]."<br>";
// echo count($arr)."<br>";
// echo count($arr[3])."<br>";

// for ($i=0; $i < count($arr); $i++) { 
//      for ($j=0; $j < count($arr[$i]); $j++) { 
//          echo $arr[$i][$j];
//          echo " ";
//      }
//      echo "<br>";
// }

// $sum=0;
// // $sub =0;
// $multi = 1;
// for ($i=0; $i < 4; $i++) { 
//     for ($j =0; $j  < 4; $j ++) { 
//         // echo  $arr[$i][$j]."<pre>    </pre> ";
//         echo  $arr[$i][$j]."  ";
//  $sum = $sum + $arr[$i][$j] ;
// //  $sub = $sub - $arr[$i][$j] ;
// $multi = $multi *  $arr[$i][$j];
//     }
//     echo "Sum of row $i = ".$sum ." and ";
//     // echo $sub;
//     echo "\t" ."Multiplication of row $i = " .$multi;
//     echo "<br>";

// }
//
// $threeDim =array(array(
//     array(1, 2, 3, 4),
//     array(6, 7, 9, 3),
//     array(1, 0, 4, 5)

// ));
// // echo count($threeDim)."<br>";
// // echo count($threeDim[0])."<br>";
// // echo count($threeDim[0][0])."<br>";
// for ($i=0; $i < count($threeDim) ; $i++) { 
//     for ($j=0; $j < count($threeDim[$i]); $j++) { 
//         for ($k=0; $k < count($threeDim[$i][$j]); $k++) { 
//             echo $threeDim[$i][$j][$k];
//             echo " ";
//         }
//         echo "<br>";
//     }
    
// }

// $arr1 = array(1,2,3,4);
// $arr2 = array(1,5,6,4);
// echo array_sum($arr1)."<br>";
// print array_sum($arr1) ."<br>";
// // print array_sum($arr1).+.array_sum($arr2)."=";
// // $a = array_sum($arr1);
// // $b = array_sum($arr2);
// // $c = $a + $b;
// // echo $c;
// $result = array();
// // echo count($result);
// for ($i=0; $i < 1; $i++) { 
//     for ($j=0; $j < 1; $j++) { 
//         $result[$i][$j] = $arr1[$i][$j] +$arr2[$i][$j];
        
//     }
//     echo  $result;
//     // print_r($result);
// }
 


// $array1=array('0'=>array('0'=>1,'1'=>2,'2'=>3),'1'=>array('0'=>4,'1'=>5,'2'=>6),'2'=>array('0'=>7,'1'=>8,'2'=>9));
// $array2=array('0'=>array('0'=>2,'1'=>4,'2'=>8),'1'=>array('0'=>3,'1'=>6,'2'=>9),'2'=>array('0'=>4,'1'=>8,'2'=>12));
 
 
// // $result=array();
 
 
// for($x=0;$x<=2;$x++)
// {
// 	for($y=0;$y<=2;$y++)
// 	{
// 		$result[$x][$y]=$array1[$x][$y]+$array2[$x][$y];
		
// 	}
// 	echo "<pre>";
// 	echo "matrix"." ";
// 	print_r($result);
// 	//echo $result;
// }
$array1=array('0'=>array('0'=>1,'1'=>2,'2'=>3),'1'=>array('0'=>4,'1'=>5,'2'=>6),'2'=>array('0'=>7,'1'=>8,'2'=>9));
$array2=array('0'=>array('0'=>2,'1'=>4,'2'=>8),'1'=>array('0'=>3,'1'=>6,'2'=>9),'2'=>array('0'=>4,'1'=>8,'2'=>12));
 
 
 
$result=array();
 
$result= $array1[0][0]+$array2[0][0]."<br>";
echo $result;
$result= $array1[0][1]+$array2[0][1]."<br>";
echo $result;
$result= $array1[1][1]+$array2[1][1]."<br>";
echo $result."<br>";


$array1= array(
    array(1,2,3,4),
    array(4,7,1,4),
    array(9,2,5,4)
);
$array2= array(
    array(3,5,7,4),
    array(4,6,1,2),
    array(1,3,5,8)
);
$result=array();
 
$result= $array1[0][0]+$array2[0][0]."<br>";
echo $result;
$result= $array1[0][1]+$array2[0][1]."<br>";
echo $result;
$result= $array1[1][1]+$array2[1][1]."<br>";
echo $result;
 
for($x=0;$x<=2;$x++)
{
	for($y=0;$y<=3;$y++)
	{
		// $result=$array1[$x][$y]+$array2[$x][$y];
		$result=$array1[$x][$y]- $array2[$x][$y];
		// $result=$array1[$x][$y]*$array2[$x][$y];
        echo $result." ";
		 
	}
    echo "<br>";
	// echo "<pre>";
	// echo "matrix"." ";
	// print_r($result);
}

?>