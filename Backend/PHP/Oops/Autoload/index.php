<?php
    // function __autoload($class){ // is not supported in php 7 version  instead of this we use spl_autoload_register
    //     require "Autoload/" .$class. ".php";
    // }
    // spl_autoload_register(function  ($class_name) {
    //     // include $class_name . '.php';
    //      require $class_name . '.php';
    // });
    
    $obj  = new  first();
    $obj2 = new  second(); 
    
?>