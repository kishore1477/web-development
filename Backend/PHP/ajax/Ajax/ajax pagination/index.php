<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Ajax pagination</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="main">
        <div id="header">
            <h1>PHP & Ajax pagination</h1>
        </div>
    </div>
    <div id="table-data">
    </div>
    
    <script src="js/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            function loadtable(page){
                $.ajax({
                    url: "ajax_pagination.php",
                    type : "POST",
                    data :{page_no : page},
                    success : function (data){
                        $("#table-data").html(data);
                    }
                })
            }
            loadtable();
            // pagination code
            $(document).on("click","#pagination a",function(e) {
      e.preventDefault();
      var page_id = $(this).attr("id");

    //   loadtable(page_id);
    })
        })
    </script>
</body>
</html>