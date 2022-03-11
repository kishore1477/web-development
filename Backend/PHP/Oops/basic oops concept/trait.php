<?php
    trait hello{
         public function sayhello(){
             echo " This is hello trait<br>";
         }
         public function sayhi(){
             echo " This is hello trait in sayhi function <br>";
         }
        }
    trait  bye{
         public function  saybye(){
             echo "This is trait bye <br>";
         }
    }

    class A{
        use  hello, bye;
    }

    class B{
        use hello, bye;
    }
    $obj = new A();
    $obj->sayhello();
    $obj-> saybye();
    $obj-> sayhi();
    
    
    
    $obj = new B();
    $obj->sayhello();
    $obj-> saybye();
    $obj-> sayhi();

    


?>