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
    <title>User dashboard <?php echo $_SESSION["aName"]; ?></title>
</head>

<body>


    <div class="nav">
        <div class="logo">
            <h2>LMS</h2>
        </div>

        <div class="navbar">
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

    <div class="user-data">
        <table class="udata-table" cellspacing="0">
            <tr>
                <th colspan="3">Welcome to LMS library <?php echo $_SESSION["aName"]; ?> </th>
            </tr>
            <tr>
                <td> <b> Name:</b> <?php echo $_SESSION["aName"]; ?> </td>
                <td><b>Email: </b> <?php echo $_SESSION["aEmail"]; ?></td>
                <td> <b>Phone: </b> <?php echo $_SESSION["aPhone"]; ?></td>
            </tr>
        </table>
    </div>

    <div class="admin-features">


        <table class="admin-features-table" cellspacing="0">

            <tr>
                <th colspan="2">Issuing books & users.</th>
            </tr>

            <tr>
                <td class="a-f-titles">Show book requests from the users.</td>
                <td><a href="./showBookRequest.php" class="admin-f-btn">Show Requests</a></td>
            </tr>
            <tr>
                <td class="a-f-titles">Issue books to the user.</td>
                <td><a href="./issueBooks.php" class="admin-f-btn">Issue book</a></td>
            </tr>
            <tr>
                <td class="a-f-titles">Show all issued books.</td>
                <td><a href="./check_all_issued_books.php" class="admin-f-btn">Issued books</a></td>
            </tr>
            <tr>
                <td class="a-f-titles">Show all users.</td>
                <td><a href="./show_users.php" class="admin-f-btn">Show Users</a></td>
            </tr>

            <tr>
                <th colspan="2">Books</th>
            </tr>
            <tr>
                <td class="a-f-titles">Show all books available.</td>
                <td><a href="./showBooks.php" class="admin-f-btn">Show Books</a></td>
            </tr>
            <tr>
                <td class="a-f-titles">Add books to the library.</td>
                <td><a href="./add_book.php" class="admin-f-btn">Add Books</a></td>
            </tr>
            <tr>
                <td class="a-f-titles">Manage library books.</td>
                <td><a href="./manage_books.php" class="admin-f-btn">Manage Books</a></td>
            </tr>


        </table>


    </div>



</body>

</html>