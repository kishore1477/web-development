<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    #ques {
        min-height: 433px;
    }
    </style>
    <title> Welcome to iDiscuss - Coding Forum</title>
</head>

<body>
    <?php include "partials/db_connect.php";  ?>
    <?php include "partials/_header.php";  ?>
    <?php
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `thread` WHERE `thread_id` = '$id'";
    $result = mysqli_query($conn, $sql);
    //  $id  = $row1["category_id"] ;
    while ($row = mysqli_fetch_assoc($result)) {
        $title = $row["thread_title"];
        $desc = $row["thread_desc"];
        $thread_user_id= $row['thread_user_id'] ;
        // echo $thread_user_id;
      $sql2 = "SELECT * FROM `usertable` WHERE  `sno`= '$thread_user_id'";
      $result2 = mysqli_query($conn, $sql2);
      $row2 = mysqli_fetch_assoc($result2);
      $posted_by = $row2['user_email'];     



    }

    ?>
    <div class="bg-light p-5 rounded-lg m-3">
        <h1 class="display-4"> <?php echo $title; ?></h1>
        <p class="lead"> <?php echo $desc; ?></p>
        <hr class="my-4">
        <p>This is perr to perr forum for sharing knowledge with each other
            No Spam / Advertising / Self-promote in the forums, Do not post “offensive” posts, links or images, Do not
            cross post questions, Do not PM users asking for help, Remain respectful of other members at all times.
        </p>
        <p> Posted By : <b> <?php echo $posted_by ?> </b> </p>
    </div>
    </div>

    <?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ){

echo ' <div class="container">
    <h1 class="py-2"> Post a  Comment</h1>
    <form action =" '. $_SERVER['REQUEST_URI'] .'" method = "POST">
  <div class="form-group">
    <label for="exampleInputdesc"> Post your Comment</label>
    <div class="form-group">
    <textarea class="form-control" id="comment" name ="comment" rows="3"></textarea>
    <input type="hidden" name="sno" value = "'.$_SESSION['sno'].'" >

  </div>
  <button type="submit" class="btn btn-success mt-2">Post Comment</button>
</form>
    </div>';
}
else{
  echo '
  <div class="container">
      
  <h1 class="py-2">Start a Discussion</h1>
  <p class ="lead"> You are not logged in please login for post a comment </p>
  </div>
  ';
}

    ?>



    <?Php

$method = $_SERVER["REQUEST_METHOD"];
$showAlert = false;
if($method == "POST"){
$comment =  $_POST["comment"];
$comment = str_replace("<","&lt;", $comment);
$comment = str_replace(">","&gt;", $comment);
$sno =  $_POST['sno'];
$sql = "INSERT INTO `comments` ( `comment_content`, `comment_by`, `thread_id`, `comment_time`) VALUES ('$comment', '$sno', '$id', current_timestamp())";
$result = mysqli_query($conn, $sql);
$showAlert =true;
}
if($showAlert){
echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success!</strong>  your  comment has been  added.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
} 
?>
    <div class="container " id="ques">
        <h1 class="py-2">Discussion</h1>
        <?php
        $id = $_GET['threadid'];
        $sql = "SELECT * FROM `comments` WHERE `thread_id` = $id";
        $result = mysqli_query($conn, $sql);
        $noResult = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $noResult =  false;
            $id = $row["comment_id"];
            $content = $row["comment_content"];
            $comment_time = $row["comment_time"];
            // $comment_by =$row["comment_by"];
            $thread_user_id =$row["comment_by"];
             $sql2 ="SELECT * FROM `usertable` WHERE `sno` ='$thread_user_id' ";
        $result2 = mysqli_query($conn, $sql2);
         $row2 =mysqli_fetch_assoc($result2);
     $email =$row2["user_email"];
            echo '<div class="media d-flex my-3">
                <img class="mr-4" src="image/userdefault.png" width="74px" alt="">
                <div class="media-body mx-4"> 
                <p class="fw-bold">'.$email.' at '.$comment_time.'</p>
                '.$content.'
                </div>
                </div>';
                        }
                    if ($noResult) {
                        echo '  <div class="jumbotron jumbotron-fluid bg-light">
                <div class="container">
                <p class="display-4">No Comment Found</p>
                <p class="lead"> Be the first person to ask a question.</p>
                </div>
            </div>';
                    }
        ?>
    </div>
    <?php include "partials/_footer.php";  ?>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>