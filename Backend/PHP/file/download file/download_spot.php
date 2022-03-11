<?php

if(isset($_GET['path']))
{
   echo  $filename = $_GET['path'];
    //Check the file exists or not
    if(file_exists($filename)) {
    echo "file is exists";
    // //Define header information
    // header('Content-Description: File Transfer');
    // header('Content-Type: application/octet-stream');
    // header("Cache-Control: no-cache, must-revalidate");
    // header("Expires: 0");
    // header('Content-Disposition: attachment; filename="'.basename($filename).'"');
    // header('Content-Length: ' . filesize($filename));
    // header('Pragma: public');
    
    // //Clear system output buffer
    // flush();
    
    // //Read the size of the file
    // readfile($filename);
    
    // //Terminate from the script
    // die();
    }
    else{
    echo "File does not exist. due to pta nhi";
    }
}else{
    echo "File does not found";
}
//    $file = $_GET['file'].'.pdf'; 
   //    header('Content-Type: application/pdf');  
   
//    header('Content-Disposition: attachment; filename="'.$file.'"');

// header("Content-Disposition: attachment; filename=" .

// urlencode($file));
// header('Content-Disposition: attachment; filename=" '.($file).'"');
// $fr= fopen($file, "r");
// while(!feof($fr)){
//     echo fread($fr,8192);
//     flush();

// }
// fclose($fr);

?>