<?php
namespace A;
// first priorty child class function then trait and then parent class
    trait hello{
        function sayhello(){
            echo "Hello from trait";
        }
    }
    class A{
     
        function sayhello(){
            echo "Hello from class A";
        }
    }
    class B extends A{
        // use  hello;
        // function sayhello(){
        //     echo "Hello from derived class B";
        // }
    }
    $obj = new B();
    $obj->sayhello();
    echo "<br>";

    // use  all trait of common function name  in one  class 
    trait hello{
        function sayhello(){
            echo "Hello from  hello trait";
        }
    }
    trait hi{
        function sayhello(){
            echo "Hello from hi trait";
        }
    }
    class A{
     use hello, hi{
         hello::sayhello insteadOf hi;
         hi::sayhello as newSayHello;
     }
    }
    
    $obj = new A();
    $obj->sayhello();
    echo "<br>";
    $obj->newSayHello();
    trait hello{
      private  function sayhello(){
            echo "Hello from  hello trait";
        }
    }
      
    class A{
     use hello{
         hello::sayhello as public;
     }
    }
    
    $obj = new A();
    $obj->sayhello();
     
    





?> 