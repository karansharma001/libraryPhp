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
    <title>Book Requests</title>
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



    <div class="all-user-cont">
        <table class="all-users" cellspacing="0">
            <tr>
                <th>#</th>
                <th>User Id</th>
                <th>User Name</th>
                <th>Requested Book Id</th>
                <th>Status</th>
            </tr>

            <?php

            include "../db_connection.php";



            $query = "select uId, uName, rBid, request_book.status from users left join request_book on users.uId = request_book.rUId where status = 'Pending'";
            $allReq = mysqli_query($connect, $query);
            $i = 1;

            while ($row = mysqli_fetch_assoc($allReq)) {
            ?>

                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['uId'] ?></td>
                    <td><?php echo $row['uName'] ?></td>
                    <td><?php echo $row['rBid'] ?></td>
                    <td><?php echo $row['status'] ?></td>
                </tr>


            <?php
                $i++;
            }

            ?>


        </table>
    </div>










</body>

</html>