<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/userdashboard.css">
    <link rel="stylesheet" href="./css/adminDb.css">
    <link rel="stylesheet" href="./css/issueboook.css">
    <title>Return Book</title>
</head>

<body>


    <div class="nav">
        <div class="logo">
            <h2>LMS</h2>
        </div>

        <div class="navbar">
            <div class="nav-items">
                <a href="./user_dashboard.php">Dashboard</a>
            </div>
            <div class="nav-items">
                <a href="./userProfile.php">Account Details</a>
            </div>
            <div class="nav-items">
                <a href="./edit_userProfile.php">Edit Account Details</a>
            </div>

            <div class="nav-items">
                <a href="./logout.php">Logout</a>
            </div>


        </div>

    </div>


    <div class="issueBookcont">

        <div class="center">



            <div class="isshead">
                <p>Return book to the library</p>
            </div>

            <div class="issue-book-form">


                <form action="" method="POST">


                    Enter Book Id: <input type="number" name="rBid" style="margin-right: 20px;">

                    <input type="Submit" value="Return Book" id="ibbtn" name="return_book">

                </form>
            </div>
        </div>
    </div>

    <?php

    include "./db_connection.php";

    if (isset($_POST['return_book'])) {

        $rBid = $_POST["rBid"];


        $requestBookQuery = "delete from request_book where rUId = $_SESSION[uId] and rBid = $rBid";

        $res = mysqli_query($connect, $requestBookQuery);
        if ($res) {

    ?>
            <script>
                alert("Book Returned!!");
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Can't Return this book!!");
            </script>
    <?php
        }
    }








    ?>






</body>

</html>