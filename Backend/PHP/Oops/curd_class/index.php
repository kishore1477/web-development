<?php
    include "database_connect.php";
    $obj = new database();
    $join = "citytb on students.city = citytb.cid";
    $colname = "students.id, students.name,students.age, citytb.cname";
    $limit = 2;
    // $obj->select('students', "id,name,age,cname", $join,   null, null,2);
    $obj->select('students',  $colname, $join,   null, null,$limit);
    echo " <br>"; 
    echo "    Select result is ";
    echo "<pre>";
    print_r($obj->getResult());
    echo "</pre>";

    // $obj->insert('students', ['name'=>'Chamanlal', 'age' => '24', 'city' => 'Gulam Nabi Shah']);
    // echo "Insert result is ";
    // print_r($obj->getResult());


    // $obj-> update('students', ['name'=>'  Rakesh kumar', 'age' => '25', 'city' => 'Hyderabad'], 'id= "4"');
    //     $obj-> update('students', ['city' => 'Patia'], 'city = "Hyderabad"');
    //  echo " <br>";
    //     echo " Update result is";
    //     print_r($obj->getResult());
    
    
    // $obj->  delete('students',  ' name= "chamanlal"');
    // echo " <br>";
    // echo "  Delete result is ";
    // print_r($obj->getResult());


    // // $obj->   sql("SELECT * FROM students");
    // $obj->   sql("SELECT * FROM students WHERE age = '16'");
    // echo " <br>";
    // echo "   Sql result is ";
    // echo "<pre>";
    // print_r($obj->getResult());
    // $obj->    select('students', '*', null, null, null, null);
    // $obj->    select('students', 'id,name', null,  'city= "patia"', "1",null);
    // $obj->select('students', "*",null, null, null,2);
    // $obj->select('students', "*",null,  'city ="Patia"', null,2);
    // echo " <br>"; 
    // echo "    Select result is ";
    // echo "<pre>";
    // print_r($obj->getResult());
    // echo "</pre>";


    // $obj->pagination('students',null, null,2);
    // $obj->pagination('students',null,  'city ="Patia"',2);
    $obj->pagination('students', $join, null,$limit);
?>