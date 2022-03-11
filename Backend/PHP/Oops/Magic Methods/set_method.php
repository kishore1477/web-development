<?php
     // get and set is used  for  access any property or method out of class and set value of this proprerty.
    class abc{
          private $name;

// get function is used for showing  existance of private property 
      public  function __get($name)
        {
            echo "Your are trying to access Non existing or private property($name)";
           
        }
 // set function is used for showing value of property from outside of class. As well as  show existance of property
      public  function __set($property, $value){ // must pass two argument in set function
          if(property_exists($this, $property)){
              $this->$property = $value;
          }
          else{
              echo "Property does not exist : $property";
          }
        }
        
    }
    $obj= new abc();
    // echo $obj->name;
    // echo $obj->name ="Kishore kumar";
    echo $obj-> course ="PHP";

?>