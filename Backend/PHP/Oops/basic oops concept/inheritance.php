<?php
    class employee{
        public $name, $age , $salary;


        function __construct($n, $a, $s){
            $this->name= $n;
            $this->age= $a;
            $this->salary= $s;
        }
        function inf(){
            echo "
            <h1>Employee Profile</h1>
            Employee Name :  $this->name  <br>
            Employee  Age :  $this->age  <br>
            Employee  Salary :  $this->salary  <br>
            
            ";
        }
    }
    class manager extends employee{
        public  $ta= 1000, $phone =500, $totalSalary;
        function inf(){
            $this->totalSalary = $this->salary + $this ->ta + $this->phone;
            echo "
            <h1> Manager Profile</h1>
             Manager Name :  $this->name  <br>
             Manager  Age :  $this->age  <br>
             Manager Salary :  $this->totalSalary  <br>
            
            ";
        }
    }
    $e1 = new employee("Kishore kumar", 20 , 2000);
    $e1->inf();
 
    $m1 = new manager("Amrat kumar", 23, 10000);
    $m1->inf();



    // multi - inheritance
?>