<?php
$roomname = $_GET["roomname"];


// connect to the database 
include "db_connect.php";
// check for existing of roomname in database
$sql = "SELECT * FROM `rooms` WHERE `roomname` = '$roomname'";
$result = mysqli_query($conn, $sql);
if ($result) {
    // check if room exist
    if (mysqli_num_rows($result) == 0) {
        $message = "This room does not exists, try to create new one";
        echo '<script language="javascript">';
        echo 'alert ("' . $message . '")';  //not showing an alert box.
        // echo 'window.location ="http://localhost:81/PHP/PHP project/chatroom"';

        echo '</script>';
    }
} else {
    die("ERROR: " . mysqli_error($conn));
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            margin: 0 auto;
            max-width: 800px;
            padding: 0 20px;
        }

        .container {
            border: 2px solid #dedede;
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }

        .darker {
            border-color: #ccc;
            background-color: #ddd;
        }

        .container::after {
            content: "";
            clear: both;
            display: table;
        }

        .container img {
            float: left;
            max-width: 60px;
            width: 100%;
            margin-right: 20px;
            border-radius: 50%;
        }

        .container img.right {
            float: right;
            margin-left: 20px;
            margin-right: 0;
        }

        .time-right {
            float: right;
            color: #aaa;
        }

        .time-left {
            float: left;
            color: #999;
        }

        .anyClass {
            height: 350px;
            overflow-y: scroll;
        }
    </style>
</head>

<body>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3   bg-white">

        <span class="fs-4 text-dark"> AnonymousChatroom.com</span>


        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 text-dark text-decoration-none " href="#"> Home</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="#"> About</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="#"> Contact us</a>
        </nav>
    </div>
    <h2>Chat Messages- <?php echo $roomname; ?> </h2>

    <div class="anyClass">
         
    </div>


    <input type="text" class="form-control" name="usermsg" id="usermsg" placeholder="Add messages"><br>
    <button class="btn btn-secondary" name="submitmsg" id="submitmsg">Send</button>
    <!-- <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"> </script>
    <script language="javascript">
        //    check for new message every one second
        setInterval(runfunction,1000);

        function runfunction() {
             $.post("selectmsg.php",{
                    room: '<?php echo $_GET["roomname"]; ?>'},
                    function(data,status){
                        document.getElementsByClassName("anyClass")[0].innerHTML =data;
                    });
                    }

                    


        // using enter key to submit
        var input = document.getElementById("usermsg");
        // Execute a function when the user releases a key on the keyboard
        input.addEventListener("keyup", function(event) {
            // Number 13 is the "Enter" key on the keyboard
            if (event.keyCode === 13) {
                // Cancel the default action, if needed
                event.preventDefault();
                // Trigger the button element with a click
                document.getElementById("submitmsg").click();
            }
        });
        // 
        $("#submitmsg").click(function() {
            var clientmsg = $("#usermsg").val();
            $.post("submitmsg.php", {
                    text: clientmsg,
                    room: '<?php echo $_GET["roomname"]; ?>',
                    ip: '<?php echo $_SERVER["REMOTE_ADDR"] ?>'
                },
                function(data, status) {
                    document.getElementsByClassName('anyClass').innerHTML = data;
                });
            $("#usermsg").val("");
            return false;

        });
    </script>
</body>

</html>