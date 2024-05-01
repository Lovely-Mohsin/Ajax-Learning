<!DOCTYPE html>
<html lang="en">

<head>
    <title>Insert Query</title>
    <!-- bootstrp links -->
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container w-75 shadow mx-auto mt-5 p-5">

        <h3 class=" p-1 mb-2">Add <span class="text-success"> User</span> Information</h3>
        <hr>

        <!-- form to get data from user -->
        <div class="row ">
            <div class="col-md-4 px-3 mt-2">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control  mb-3" id="fname" placeholder="Enter here..." />
            </div>

            <div class="col-md-4 px-3 mt-2">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control mb-3" id='lname' placeholder="Enter here..." />
            </div>

            <div class="col-md-4 mt-3 mx-auto">
                <label class="form-label"></label>
                <input type="submit" id="send" class="btn btn-success w-100" name="submit" value="Submit" />
            </div>
        </div>

        <!-- Show Data in table -->
        <div class="row my-3">
            <div class="col-md-12">
                <h3 class=" p-1 mb-2">View All <span class="text-success"> User</span></h3>
                <hr>
            </div>
            <div class="col-md-12" id="table-data">

            </div>
        </div>
    </div>


    <!-- js links -->
    <script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./jquery/jquery-3.7.1.min.js"></script>

    <script>
        $(document).ready(function() {

            // insert data function 
            function btn.click() {
                // send data on insert qry page
                $.ajax({
                    url: "./show-data-query.php",
                    type: "GET",
                    data: {

                    },
                    success: function(response) {
                        $('#table-data').html(response)

                    }
                })


            }

            loadData();

        })


        $(document).ready(function() {

var btn = $("#send");

// insert data function 
btn.click(function() {
    var fname = $("#fname").val();
    var lname = $("#lname").val();

    // send data on insert qry page
    $.ajax({
        url: "./insert-qry.php",
        type: "POST",
        data: {
            firstName: fname,
            lastName: lname
        },
        success: function(response) {
            alert(response);
            $("#fname").val("");
            $("#lname").val("");
        }
    })


})

})
    
    </script>

</body>

</html>