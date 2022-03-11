<?php
$name = "kishore";
echo $name;
echo "<br>";
echo strlen($name);
echo "<br>";
echo "The length of my string is " .strlen($name);
echo "<br>";
echo "The length "." string is  " .strlen($name);
echo "<br>";
$goodness = "Kishore is a good boy";
echo strlen($goodness);
echo "<br>";
echo "The length of goodness string is ".strlen($goodness);
 echo "<br>";
 echo str_word_count($name);
 echo "<br>";
 echo "The total word in $ name string is " .str_word_count($name);
 echo "<br>";
 echo str_word_count($goodness);
 echo "<br>";
 
 echo "The total word in $ goodness string is ".str_word_count($goodness);
 echo "<br>";
 
 echo strrev($name);
 echo "<br>";
 echo "The reverse string of $ name is " . strrev($name);
 echo "<br>";
 echo strrev($goodness);
 echo "<br>";
 echo "The reverse string of $ goodness is ".strrev($goodness);
 echo "<br>";
 echo "The position of 'is' in  string $ goodness is ".strpos($goodness,"good");
 echo "<br>";
 
 echo str_replace("Kishore", "Amrat", $goodness);
 echo "<br>";
 echo str_repeat($goodness,5);
 echo "<br>";
 
 echo "            you will come imediatelly  when i call  you             ";
 echo "<br>";

//  echo trim("<pre>             you will come imediatelly  when i call  you         </pre>");
 echo rtrim("             you will come imediatelly  when i call  you        ");
 echo "<br>";
 echo "break";
 echo "<br>";
 echo "<pre>";
 echo rtrim("            you will come imediatelly  when i call  you             ");
 echo trim("            you will come imediatelly  when i call  you             "); 
 echo "            you will come imediatelly  when i call  you             ";
 echo "</pre>";
 echo trim("            you will come imediatelly  when i call  you             ");
 echo trim("            you will come imediatelly  when i call  you             ");

//  echo $message1;

?>