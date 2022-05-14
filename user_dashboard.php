<?php

session_start();

// $_SESSION["requestUserId"] = $_SESSION["uId"];

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

    <title>User dashboard <?php echo $_SESSION["uName"]; ?></title>
</head>

<body>

    <div class="nav">
        <div class="logo">
            <h2>LMS</h2>
        </div>

        <div class="navbar">
            <div class="nav-items">
                <a href="./userProfile.php">View Profile</a>
            </div>
            <div class="nav-items">
                <a href="./edit_userProfile.php">Edit Profile</a>
            </div>

            <div class="nav-items">
                <a href="./logout.php">Logout</a>
            </div>


        </div>

    </div>

    <div class="user-data">
        <table class="udata-table" cellspacing="0">
            <tr>
                <th colspan="3">Welcome to LMS library <?php echo $_SESSION["uName"]; ?> </th>
            </tr>
            <tr>
                <td> <b> Name:</b> <?php echo $_SESSION["uName"]; ?> </td>
                <td><b>Email: </b> <?php echo $_SESSION["uEmail"]; ?></td>
                <td> <b>Phone: </b> <?php echo $_SESSION["uPhone"]; ?></td>
            </tr>
        </table>
    </div>



    <div class="admin-features">


        <table class="admin-features-table" cellspacing="0">

            <tr>
                <th colspan="2">Requests and books</th>
            </tr>

            <tr>
                <td class="a-f-titles">Show all books available in the library.</td>
                <td><a href="./uShowBooks.php" class="admin-f-btn">Show Books</a></td>
            </tr>
            <tr>
                <td class="a-f-titles">Request a book.</td>
                <td><a href="./request_book.php" class="admin-f-btn">Request book</a></td>
            </tr>
            <tr>
                <td class="a-f-titles">Check Request Status</td>
                <td><a href="./request_status.php" class="admin-f-btn">Check Status</a></td>
            </tr>
            <tr>
                <td class="a-f-titles">Check Issued Books.</td>
                <td><a href="./check_issued_books.php" class="admin-f-btn">Ckeck Books</a></td>
            </tr>
            <tr>
                <td class="a-f-titles">Return Book</td>
                <td><a href="./return_books.php" class="admin-f-btn">Return Book</a></td>
            </tr>


        </table>


    </div>



</body>

</html>