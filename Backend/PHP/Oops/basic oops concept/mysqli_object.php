<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "curd_Oops";
    

    $conn = new mysqli($servername, $username, $password, $database);
    if($conn->connect_error){
        die("connection failed : ". $conn->connect_error);
    }
        $sql = "SELECT * FROM `students`";
       $result = $conn->query($sql);
       if($result->num_rows > 0){
           
while($row = $result->fetch_assoc()){
    // echo $row["name"];
    echo "Id " . $row["id"]. " - Name: ". $row["name"]." -  Age : ". $row["age"]." - City: ".$row["city"] ."<br>";
    // echo "Id {$row["id"]}  - Name: {$row["name"]} - Age: {$row["age"]} - City : {$row["city"]}";
}
}
else{
    echo "No result found";
}
    $conn->close();

?>