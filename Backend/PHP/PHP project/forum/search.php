<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> Welcome to iDiscuss - Coding Forum</title>
    <style>
        .container{
            min-height: 81vh;
        }
    </style>
</head>

<body>
    <?php include "partials/db_connect.php";  ?>
    <?php include "partials/_header.php";  ?>
 

        
    <!-- Search Results start here  -->
     <!-- Search thread  -->
    <div class="container my-3">
        <h1> Search result for <em>" <?php  echo $_GET['search']?> "</em></h1>
        <?php
        $query = $_GET['search'];
        $sql = "SELECT * FROM thread WHERE MATCH (thread_title,thread_desc) AGAINST ('$query')";
        $result = mysqli_query($conn, $sql);

        // if($result){
        //     echo "run";
        // }
        // else{
        //     echo "this is error -->".mysqli_error($conn);
        // }
        // $noResult = true;
        while($row = mysqli_fetch_assoc($result)) {
            // $noResult = false;
            $title = $row["thread_title"];
            $desc = $row["thread_desc"];
            $thread_id = $row["thread_id"];
            $url ="thread.php?threadid=".$thread_id;
            echo '<div class="result">
            <h3> <a href="'.$url.'" class="text-dark">'.$title.'</a> </h3>
            <p> '.$desc.'</p>
        </div>';
        }
        ?>
         
    </div>
        }
        
         <!-- //  Search categories -->
        <!-- <?php
        $query = $_GET['search'];
        $sql = "SELECT * FROM categories WHERE MATCH (category_name, category_description) AGAINST ('$query')";
        $result = mysqli_query($conn, $sql);

        // if($result){
        //     echo "run";
        // }
        // else{
        //     echo "this is error -->".mysqli_error($conn);
        // }
        // $noResult = true;
        while($row = mysqli_fetch_assoc($result)) {
            // $noResult = false;
            $cat_name = $row['category_name'];
            $cat_desc= $row['category_description'];
             
            $category_id = $row["category_id"];
            $url ="threadlist.php?catid=".$category_id;
            echo '<div class="container my-2">
    
            <div class="bg-light p-5 rounded-lg m-3">
                <h1 class="display-4">Welcome to '.$cat_name.'  forum</h1>
                <p class="lead"> '.$cat_desc.'</p>
                <hr class="my-4">
                <p>This is perr to perr forum for sharing knowledge with each other
                    No Spam / Advertising / Self-promote in the forums, Do not post “offensive” posts, links or images, Do not cross post questions, Do not PM users asking for help, Remain respectful of other members at all times.
                </p>
                <a class="btn btn-success btn-lg" href= "'.$url.'" role="button">Learn more</a>
            </div>
        </div>';
        }
        ?>
         -->
        
    <!-- </div> -->

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