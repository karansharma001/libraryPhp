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
    <title>Issue Books</title>
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
                <p>Issue book to the user</p>
            </div>

            <div class="issue-book-form">


                <form action="" method="POST">

                    Enter Used Id: <input type="number" style="margin-right: 20px;" name="iUid">
                    Enter Book Id: <input type="number" name="iBid" style="margin-right: 20px;">
                    Issue Date: <input type="date" name="iBdate" value="<?php echo date('yy-m-d'); ?>">
                    <input type="Submit" value="Issue Book" id="ibbtn" name="issue_book">

                </form>
            </div>
        </div>
    </div>

    <?php

    include "../db_connection.php";


    if (isset($_POST["issue_book"])) {
        $iBid = $_POST["iBid"];
        $iUid = $_POST["iUid"];
        $date = $_POST["iBdate"];
        $issue_query = "insert into issued_book values (null, $iUid, $iBid, $date)";
        $res = mysqli_query($connect, $issue_query);

        if ($res) {
            $status_query = mysqli_query($connect, "update request_book set status = 'Issued' where rUId = $iUid and rBid = $iBid");


    ?>
            <script>
                alert("Book Issued!!");
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Book Not Issued!!");
            </script>
    <?php
        }
    }







    ?>







</body>

</html>