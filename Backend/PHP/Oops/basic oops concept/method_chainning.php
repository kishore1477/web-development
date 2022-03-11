<?php
    class abc{
        function first(){
            echo "This is first function <br>";
            return $this;
        }
        function  second(){
            echo "This is  second function <br>";
            return $this;
        }
        function  third(){
            echo "This is  third function <br>";
        }
    }
    $test = new abc();
    // $test->first();
    // $test->second();
    // $test->third();
    $test-> first()->second()->third();

?>