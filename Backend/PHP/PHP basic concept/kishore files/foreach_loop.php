<?php
echo "foreach loop in php";

$arr = array("Apple", "Bannana","Mango","Grapes","Wattermillion");

// for ($i=0; $i < count($arr); $i++) { 
//    echo "$arr[$i] <br>";
// }
foreach ($arr as  $a) {
    echo "$a <br>";
}
$arr1 = array("kishore"=> "12", "Dileep"=>"34","Amrat"=>"23");
foreach($arr1 as $name => $marks){
    echo "$name = $marks <br>";
}
?>