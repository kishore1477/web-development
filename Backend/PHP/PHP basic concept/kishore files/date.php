<?php
// echo "Today is date " .date("d")."<br>";
// echo " Today is day " .date("l")."<br>";
// echo "Day of the week " .date("w")."<br>";
// echo " Timezone offset in seconds " .date("Z")."<br>";
// echo " This is  a " .date("m")." month"."<br>  ";
// echo " day in current month".date("t")."<br>";
// echo " This is  a " .date("y")." year"."<br>  "; // year with  2 digit
// echo " This is  a " .date("Y")." year"."<br>  "; // year with four digit
// echo "Day of the  year " .date("z")."<br>";
// echo "week of the year " .date("W")."<br>";
// echo "Today date is ".date("d-m-y l")."<br>";
// echo "Today date is ".date("d/m/y l")."<br>";
// echo "<br> <br>";

// echo "Now hour is ".date("h")."<br>"; // time 12  hour format
// echo "Now hour is ".date("H")."<br>"; // time 24  hour format
// echo "Now  minute is ".date("i")."<br>";
// echo "Now  second is ".date("s")."<br>";
// echo "Now   meridium is ".date("a")."<br>";
// echo "Now time is ".date("h:i:s a");
 
// // date_default_timezone_set("Asia/Tokyo ");
// // echo "The time is " . date("h:i:sa");

// echo "<br> <br>";
// // mktime(hour, minute, second, month, day, year)
//   // mktime()  create privious date 
// //   $k = mktime(12,3,43,12,15,2002);
// //   echo "Created date is ".date("m-d-Y h:i:s a l", $k);
// $kishorebirth  = mktime(0,0,0,2,6,2002);
// echo "kishore's birth day date is ".date("m-d-Y h:i:s a l" , $kishorebirth);
//   echo "<br> <br>";

// // strtotime  &  strftime 
// echo strtotime("now");
echo date( "m-d-Y h:i:sa l",strtotime("now"))."<br>";
echo date( "m-d-Y h:i:sa l",strtotime("today"))."<br>";
echo date( "m-d-Y h:i:sa l",strtotime("+2hour 34minute"))."<br>";
echo date( "m-d-Y h:i:sa l",strtotime(" next monday"))."<br>";
echo date( "m-d-Y h:i:sa l",strtotime(" first day of last month"))."<br>";
echo date( "m-d-Y h:i:sa l",strtotime("last day of last month"))."<br>";
echo date( "m-d-Y h:i:sa l",strtotime(" last day of last  year"))."<br>";
echo date( "m-d-Y h:i:sa l",strtotime("+5 days"))."<br>";
echo date( "m-d-Y h:i:sa l",strtotime("first day of next month"))."<br>";
echo date( "m-d-Y h:i:sa l",strtotime("last day of next month"))."<br>";
echo date( "m-d-Y h:i:sa l",strtotime("last day of first week of next month"))."<br>"; // why wrong answer ?



  echo "<br> <br>";
// $startdate=strtotime("Saturday");
// $enddate=strtotime("+6 weeks", $startdate);


// while ($startdate < $enddate) {
//   echo date("M d", $startdate) . "<br>";
//   $startdate = strtotime("+1 week", $startdate);

// }
echo "<br> <br>";
$a = strtotime("Saturday");
$b = strtotime("+1 week ", $a);
// echo date("M d" , $b);
 
while($a<$b){
  $a = strtotime("+2 days ", $a);
  
  echo date("M d", $a)."<br>";

}
?>