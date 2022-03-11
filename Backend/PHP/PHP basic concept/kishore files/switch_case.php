<?php
$weekday=4;
switch($weekday){
    default:
    echo " Please enter valid weekday";

    case 1:
        echo "Today is monday <br>";
        break;
 

    case 2:
        echo "Today is  Tuesday <br>";
        break;

    case 3:
        echo "Today is  Wednesday <br>";
        break;

    case 4:
        echo "Today is  Thursday <br>";
        break;

    case 5:
        echo "Today is  Friday <br>";
        break;

    case 6:
        echo "Today is  Saturday <br>";
        break;

    case 7:
        echo "Today is  Sunday <br>";
        break;
        // default:
        // echo " Please enter valid weekday";
}

$choices = 3;
switch($choices){
    case 1:
        $a = 2;
        $b = 3;
        echo "The sum of a and b is ". $a + $b;
break;
    case 2:
        $a = 12;
        $b = 3;
        echo "The  subtract of a and b is ". $a - $b;
break;
    case 3:
        $a = 2;
        $b = 3;
        echo "The  multiplication  of a and b is ". $a * $b;
break;
    case 4:
        $a = 12;
        $b = 3;
        echo "The  division  of a and b is ". $a / $b;
break;

}
echo "<br> <br> ";
$select = 67;
switch ($select) {
    case 1:
        $i;
        $n=2;
        for($i=1; $i<11; $i++){
            echo "The ".$n. "*".$i."=".$n * $i."<br>";
        }
        break;
    case 2:
        $i;
        $n=3;
        for($i=1; $i<11; $i++){
            echo "The ".$n. "*".$i."=".$n * $i."<br>";
        }
        break;
    case 3:
        $i;
        $n=4;
        for($i=1; $i<11; $i++){
            echo "The ".$n. "*".$i."=".$n * $i."<br>";
        }
        break;
    
    default:
    $i;
    $n=5;
    for($i=1; $i<11; $i++){
        echo "The ".$n. "*".$i."=".$n * $i."<br>";
    }
        break;

        }


?>