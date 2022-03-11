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
            <h1>PHP & Ajax  load more pagination</h1>
        </div>
    </div>
    <div id="table-data">
        <table id ="loadData" border ="1" cellspacing = "0" cellpadding ="10px" width ="100%">
            <tr>
                <th>Id</th>
                <th>Name</th>
            </tr>
        </table>
    </div>
    
    <script src="js/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            //  load data  from database with ajax
            function loadtable(page){
                $.ajax({
                    url: "ajax_loadmore_pagination.php",
                    type : "POST",
                    data :{page_no : page},
                    success : function (data){
                        if(data){

                            $("#pagination").remove();
                            $("#loadData").append(data);
                        }else{
                            $("#ajaxbtn").html("Finished");
                            $("#ajaxbtn").prop("disabled", true);
                        }
                    }
                })
            }
            loadtable();
             // Add Click Event on ajaxbtn
    $(document).on("click","#ajaxbtn",function(){
      $("#ajaxbtn").html("Loading...");
      var pid = $(this).data("id");
      console.log(pid)
      loadtable(pid);
    });
        })
    </script>
</body>
</html>