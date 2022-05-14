<?php

session_start();

include "../db_connection.php";


$BookId = $_GET["bId"];
$get_book_info_query = "select * from books where bId = $BookId";
$getBooks = mysqli_query($connect, $get_book_info_query);
$bookInfo = mysqli_fetch_assoc($getBooks);

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
    <title>Update Book</title>
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

                    Update Book Name: <input type="text" style="margin-right: 20px;" name="bName" value="<?php echo $bookInfo['bName'] ?>">
                    Update Book Author: <input type="text" name="bAuthor" style="margin-right: 20px;" value="<?php echo $bookInfo['bAuthor'] ?>">
                    Update Book Price: <input type="number" name="bPrice" value="<?php echo $bookInfo['bPrice'] ?>">
                    <input type="Submit" value="Update Book" id="ibbtn" name="update_book">

                </form>
            </div>
        </div>
    </div>

    <?php



    if (isset($_POST["update_book"])) {
        $bName = $_POST["bName"];
        $bAuthor = $_POST["bAuthor"];
        $bPrice = $_POST["bPrice"];
        $update_book_query = "update books set bName = '$bName', bAuthor = '$bAuthor', bPrice = $bPrice where bId = $BookId ";
        $res = mysqli_query($connect, $update_book_query);

        if ($res) {


    ?>
            <script>
                alert("Book Updated!!");
            </script>
        <?php
                header("Location:./showBooks.php");
        } else {
        ?>
            <script>
                alert("Can't Update book!");
            </script>
    <?php
        }
    }

    ?>

</body>

</html>