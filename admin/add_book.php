<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/userdashboard.css">

    <link rel="stylesheet" href="../css/adminDb.css">
    <link rel="stylesheet" href="../css/issueboook.css">
    <title>Add Book</title>
</head>

<body>


    <div class="nav">
        <div class="logo">
            <h2>LMS</h2>
        </div>

        <div class="navbar">
            <div class="nav-items">
                <a href="./admin_dashboard.php">Dashboard</a>
            </div>
            <div class="nav-items">
                <a href="./adminProfile.php">Account Details</a>
            </div>
            <div class="nav-items">
                <a href="./edit_adminProfile.php">Edit Account Details</a>
            </div>

            <div class="nav-items">
                <a href="./admin_logout.php">Logout</a>
            </div>


        </div>

    </div>


    <div class="issueBookcont">

        <div class="center">



            <div class="isshead">
                <p>Add book to the library</p>
            </div>

            <div class="issue-book-form">


                <form action="" method="POST">

                    Enter Book Name: <input type="text" style="margin-right: 20px;" name="bName">
                    Enter Book Author: <input type="text" name="bAuthor" style="margin-right: 20px;">
                    Enter Book Price: <input type="number" name="bPrice">
                    <input type="Submit" value="Add Book" id="ibbtn" name="add_book">

                </form>
            </div>
        </div>
    </div>

    <?php

    include "../db_connection.php";


    if (isset($_POST["add_book"])) {
        $bName = $_POST["bName"];
        $bAuthor = $_POST["bAuthor"];
        $bPrice = $_POST["bPrice"];
        $add_book_query = "insert into books values (null, '$bName', '$bAuthor', $bPrice)";
        $res = mysqli_query($connect, $add_book_query);

        if ($res) {


    ?>
            <script>
                alert("Book Added!!");
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Can't Add book!");
            </script>
    <?php
        }
    }

    ?>

</body>

</html>