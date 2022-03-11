<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <table id="main" border="1px" cellspacing="0" align="center" width="600px">
        <tr>
            <td id="header">
                <h1> Add record with PHP & Ajax </h1>
                <div id="search-bar">
                    <label for="Search">Search</label>
                    <input type="text" id="search" autocomplete="off">
                </div>
            </td>
        </tr>
        <tr>
            <td id="table-form">
                <form id="addform">


                    First Name <input type="text" id="fname">
                    Last Name <input type="text" id="lname">
                    <input type="submit" id="save-button" value="Save">

                </form>
                <!-- <button type="submit" id = "save-button" value = "Save"> </button>   -->
            </td>
        </tr>

        <tr>
            <td id="table-data">

            </td>
        </tr>
    </table>
    <div id="error-message"></div>
    <div id="success-message"></div>
    <div id="modal">
        <div id="modal-form">
            <h2>Edit form</h2>
            <table cellpadding="10" width="100%">

            </table>
            <div id="close-btn">X</div>
        </div>
    </div>

    <!-- <script src="js/jquery-3.6.0.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {

        //  show data
        function loadTable() {
            $.ajax({
                url: "ajax_load.php",
                type: "POST",
                success: function(data) {
                    $("#tabledata").html(data);
                }
            })
        }
        loadTable();

        //  insert data 
        $("#save-button").on("click", function(e) {
            e.preventDefault();

            var fname = $("#fname").val();
            var lname = $("#lname").val();
            if (fname == "" || lname == "") {
                $("#error-message").html("All fields are required").slideDown();
                $("#success-message").html(" Data has been inserted").slideUp();
            } else {
                $.ajax({
                    url: "ajax_insert.php",
                    type: "POST",
                    data: {
                        first_name: fname,
                        last_name: lname
                    },
                    success: function(data) {
                        if (data == 1) {
                            loadTable();
                            $("#addform").trigger("reset");
                            $("#success-message").html(
                                " Data has been inserted successfully").slideDown();
                            $("#error-message").html(" Data can't save").slideUp();
                        } else {
                            $("#error-message").html(" Data can't save").slideDown();
                            $("#success-message").slideUp();
                        }
                    }
                })
            }
        })

        //  delete data
        $(document).on("click", ".delete-btn", function() {
            if (confirm("Do you really want to delete this  record?")) {

                //  console.log("clicked");
                var studentId = $(this).data(
                    "id") // this data function we create in ajax_load.php for delete data
                // alert(studentId);
                var element = this;
                $.ajax({
                    url: "ajax_delete.php",
                    type: "POST",
                    data: {
                        id: studentId
                    },
                    success: function(data) {
                        if (data == 1) {
                            // alert("Data has been deleted");
                            $(element).closest("tr").fadeOut();
                        } else {
                            // alert("Data has not been deleted");
                            $("#error-message").html(" Data can't  delete").slideDown();
                            $("#success-message").slideUp();

                        }
                    }
                })
            }
        })
        // show modal-box
        $(document).on("click", ".edit-btn", function() {
            $("#modal").show();
            var studentId = $(this).data("eid")
            // alert(studentId)
            $.ajax({
                url: "load_update_form.php",
                type: "POST",
                data: {
                    id: studentId
                },
                success: function(data) {
                    $("#modal-form table").html(data);

                }
            })
        })
        // hide modal-box
        $("#close-btn").on("click", function() {
            $("#modal").hide();
        })
        // show update form
        $(document).on("click", "#edit-submit", function() {
            var stuId = $("#edit-id").val();
            var fname = $("#edit-fname").val();
            var lname = $("#edit-lname").val();
            $.ajax({
                url: "ajax_update_form.php",
                type: "POST",
                data: {
                    id: stuId,
                    first_name: fname,
                    last_name: lname
                },
                success: function(data) {
                    if (data == 1) {
                        $("#modal").hide();
                        loadTable();
                    }
                }
            })
        })
        //    live search
        $("#search").on("keyup", function() {
            var search_term = $(this).val();

            $.ajax({
                url: "ajax_search_live.php",
                type: "POST",
                data: {
                    search: search_term
                },
                success: function(data) {
                    $("#table-data").html(data);
                   
                }
            })

        })
    })
    </script>
</body>

</html>