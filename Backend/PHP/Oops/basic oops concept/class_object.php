 <?php
  
    class arithematic_oper{
        // public $a, $b, $c;
        public $a =1, $b =2;

        function sum(){
            $this ->c = $this->a +$this->b;
            
            // return $this->c;
             echo "The sum of a and b is ". $this->c;
        }
        function  sub(){
            $this ->c = $this->a - $this->b;
            // return $this->c;
             echo "The  substraction  of a and b is ". $this->c;
        }
        function   multi(){
            $this ->c = $this->a * $this->b;
            // return $this->c;
             echo "The   multiplication   of a and b is ". $this->c;
        }
        function   division(){
            $this ->c = $this->a / $this->b;
            // return $this->c;
             echo "The   division  of a and b is ". $this->c;
        }
    }
    // sum 
    $c1 =new arithematic_oper();
    // $c1->a =12;
    // $c1->b=2;
//    echo "The sum of a and b is " .$c1->sum();
//   echo  $c1->sum();
  $c1->sum();
  echo "<br>";
  //    substraction
  $c2 =new arithematic_oper();
  $c2->a =12;
  $c2->b=2;
  //    echo "The sum of a and b is " .$c1->sum();
  echo  $c2-> sub();
  
  echo "<br>";
  // multiplication
  $c3 =new arithematic_oper();
  $c3->a =12;
  $c3->b=2;
  //    echo "The sum of a and b is " .$c1->sum();
  echo  $c3->  multi();
  
  echo "<br>";
  // division
$c4 =new arithematic_oper();
$c4->a =12;
$c4->b=2;
//    echo "The sum of a and b is " .$c1->sum();
echo  $c4->  division();
echo "<br>";

// by default call function
$c5 = new arithematic_oper();
$c5->sum();

echo "<br>";
// echo $c1->sum()."<br>";
// echo $c2-> sub()."<br>";
// echo $c3-> multi()."<br>";
// echo $c4-> division()."<br>";
 ?>