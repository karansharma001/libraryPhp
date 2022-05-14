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
    <title>Manage Books</title>
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
                <th>Book Id</th>
                <th>Name</th>
                <th>Author</th>
                <th>Price</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>

            <?php

            include "../db_connection.php";

            $query = "select * from books";
            $allUsers = mysqli_query($connect, $query);
            $i = 1;

            while ($row = mysqli_fetch_assoc($allUsers)) {
            ?>

                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['bId'] ?></td>
                    <td><?php echo $row['bName'] ?></td>
                    <td><?php echo $row['bAuthor'] ?></td>
                    <td><?php echo $row['bPrice'] ?></td>
                    <td> <a href="./update_book.php?bId=<?php echo $row['bId'] ?>">Update</a></td>
                    <td><a href="./delete_book.php?bId=<?php echo $row['bId'] ?>">Delete</a></td>
                </tr>


            <?php
                $i++;
            }

            ?>


        </table>
    </div>







</body>

</html>