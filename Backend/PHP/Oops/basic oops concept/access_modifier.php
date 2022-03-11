<?php

// public access 
    class A{
public $name;

 public function __construct($n){
$this->name =$n;
}
 public function show(){
    echo " <h3>Your Name: </h3>".$this->name ."<br>";
}
    }
    class drived extends A{
        function get(){
            echo " <b> Your Name in drived class: </b>".$this->name;
        }

    }
    $c = new drived("Amrat kumar");
    $c->get();
    echo  "<br>";
    $c1 = new A("Kishore kumar");
    $c1->show();



// we can not call protected properties and methods out of class but we can call it inside class as well as drived class.
//  protected access 
    class dileep_prot{
 protected $name;
//   public $name;

   public function __construct($n){
$this->name =$n;
}
    protected function show(){
    echo " <h3>Your Name in protect: </h3>".$this->name ."<br>";
}

    }
    class  prot extends A{
        function get(){
            echo " <b> Your Name in drived class: </b>".$this->name;
        }

    }
    $c12= new dileep_prot("Dileep kumar");
    // $c12->show();
//   $c12->name ="kumar dileep";  // it is not executed out of class
    $c = new drived(" dileep kumar");
    $c->get();
    
    echo  "<br>";
    $c1 = new A(" Suresh kumar");
    $c1->show();


 


// private  access modifier
//  we can not call private function and  properties out of class as well as drived class.

class C {
private $age;

   function __construct($a){
     $this->age = $a;
    }
     function prshow(){
    echo "<b> your Age : </b> ".$this->age;
}    
}
class cDrived {
    function Cdshow(){
        echo "This function called by privative properties".$this->age;
    }
}
$c2 = new c(23);
$c2->prshow();
// $c2->age = "20";

$cd = new cDrived(12);
$cd->Cdshow();






?>