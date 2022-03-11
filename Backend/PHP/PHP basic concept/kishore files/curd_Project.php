<?php

// INSERT INTO `notes` (`S.NO`, `title`, `description`, `tstamp`) VALUES ('2', 'by books', 'This is best book shop in Karachi you can come and purchase best world book.', current_timestamp());
$servername = "localhost";
$username = "root";
$password = "";
$database = "notes";
// create a connection 
$conn = mysqli_connect($servername, $username,$password, $database);

if(!$conn){
    die ("Sorry we failed to connect ".mysqli_connect_error());
}
else{
    echo "Connection was successful"."<br>";
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add inode Curd project </title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">iNode</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact us</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container my-4">
         <h2>Add a  Note</h2>
     <form>
  <div class="mb-3">
    <label for="title" class="form-label">Node title</label>
    <input type="text" class="form-control" id="title" name ="title" aria-describedby="emailHelp">
  </div>
   
 
  <div class="mb-3">
  <label for="desc" class="form-label">Add Description</label>
  <textarea class="form-control" id="desc" name ="desc" rows="3"></textarea>
</div>
   
  <button type="submit" class="btn btn-primary">Add Note</button>
</form>
     </div>
     <div class="container">
<?php

$sql = "SELECT * FROM `notes` ";
$result =mysqli_query( $conn , $sql);
while($row = mysqli_fetch_assoc($result)){
    echo  $row["S.NO"] ." title ". $row["title"]." desc is " . $row["description"];
    echo "<br>";
   

}
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">title</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    
  </tbody>
</table>
     </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>


