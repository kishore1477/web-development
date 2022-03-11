<?php

// readfile("file.html");
// $a = readfile("myfile.txt");
// // no such file can be read    only .txt file read
// // $a = readfile(" file.tt");
// echo  $a;
// echo "<br>";
// readfile("myfile.txt");
  


// tutorial 35
// $fptr = fopen("myfile.txt", "r");
// echo $fptr;

// $fptr = fopen("myfile.txt", "r");
// $fptr = fopen("myfiale.txt", "w");
// echo $fptr;
// echo $fptr;
// echo var_dump($fptr);

// if(!$fptr){
    //     die("Unable to open this file  please enter valid file");
    // }
    //  else{
        //     echo var_dump($fptr);
        // }
        // $content = fread($fptr,5);
        // $content = fread($fptr,filesize("myfile.txt"));
        // fclose($fptr);
        // echo $content;
        
        
        
        
        // tutorial 36
        $fptr = fopen("myfile.txt", "r");
// $a =fgets($fptr);
/*
// reding a file line by line
 echo  fgets($fptr);
 echo  fgets($fptr);
 echo  fgets($fptr);
 echo var_dump(fgets($fptr));
 $a = fgets($fptr);
 while($a = fgets($fptr)){
     echo $a;
 }

*/
// read a file by charactor wise 
// display hello by using these below four statement
// echo fgetc($fptr);
// echo fgetc($fptr);
// echo fgetc($fptr);
// echo fgetc($fptr); 
// echo fgetc($fptr); 


//  $a = fgetc($fptr);
// while( $a = fgetc($fptr)){
    // // echo $a;
    // // echo $a;
    // // echo $a;
    
    // echo $a."<br>";
    
    // }
    // echo "End ";
    
    // write  a  program to display file content by target character 
    // echo fgetc($fptr); 
// while($a=fgetc($fptr)){
//     echo $a;
//     // if($a=="."){
//     if($a=="w"){
//         break;
//     }
// }

// Tutorial 37
// $fptr = fopen("myfile.txt","w");
// fwrite($fptr," \nWelcome to london \n");
// fwrite($fptr,"Welcome to  USA ");

// Appending a file in php

$fptr = fopen("myfile.txt","a");

fwrite($fptr,"\nThis is being appended4")



?>