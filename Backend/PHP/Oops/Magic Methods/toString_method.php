<?php

//   tostring method is used for showing profesional error  when user access any object of empty class.
    class abc{
      
        function __toString()
        {
             return "Can't  print object as a string of class : ".get_class($this);
        }
    }
    $obj = new abc();
    echo $obj;

?>