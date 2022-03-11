<?php
    // class abc{
    //     function __construct()
    //     {
    //         echo "This is construct function <br>";
    //     }
    //     function sayhello(){
    //         echo "This is hello function <br>";
    //     }
    //     function __destruct()
    //     {
    //         echo "This is destruct function";
    //     }
    // }
    // $obj =new abc();
    // $obj->sayhello();
    // $obj->sayhello();
    // $obj->sayhello();
    class abc{
        private $conn;
        function __construct()
        {
           $this->conn = mysqli_connect();
        }
        function sayhello(){
            echo "This is hello function <br>";
        }
        function __destruct()
        {
            mysqli_close($this->conn);
        }
    }
    $obj =new abc();
    $obj->sayhello();
    $obj->sayhello();
    $obj->sayhello();
    

?>