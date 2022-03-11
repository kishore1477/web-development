<?php


    //     session_start();
    //     session_unset();
    //     session_destroy();
    
    // echo "you are log out from this session";
    
    // session_start();
    // if(isset($_SESSION)){
    //         session_unset();
    //         session_destroy();
    //     echo "You are log out from the session";
    // }
    // else{
    //     echo "You are not log out from the session";

    // }

    
    session_start();
    if(isset($_SESSION["username"])){
            session_unset();
            session_destroy();
        echo "You are log out from the session";
    }

    elseif(!isset($_SESSION["username"])){

        echo "Please set your session";
    }
    else{
        echo "You are not log out from the session";

    }
 

?>