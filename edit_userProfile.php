<?php

session_start();
include "./db_connection.php";

$_SESSION['userID'] = $_SESSION['uId'];

$uName = "";
$uEmail = "";
$uPhone = "";
$uPassword = "";

$query = "select * from users where uId = $_SESSION[uId]";
$runquery = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($runquery)) {
    $uName = $row['uName'];
    $uEmail = $row['uEmail'];
    $uPhone = $row['uPhone'];
    $uPassword = $row['uPassword'];
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/userdashboard.css">
    <title>Edit Profile <?php echo $uName; ?></title>
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
                <a href="./userProfile.php">View Profile</a>
            </div>
            
            <div class="nav-items">
                <a href="./logout.php">Logout</a>
            </div>


        </div>

    </div>

    <div class="main">

        <div class="main-itm">

            <form action="./update.php" method="post">
                <table class="reg-form" cellspacing="0">
                    <tr>
                        <th colspan="2" class="u-reg">
                            <p>Update User Details</p>
                        </th>
                    </tr>

                    <tr>

                        <td><input type="text" name="uName" id="" placeholder="Enter Your full Name" value="<?php echo $uName ?>"></td>
                    </tr>
                    <tr>

                        <td><input type="email" name="uEmail" id="" placeholder="Enter Your Email" value="<?php echo $uEmail; ?>" ></td>
                    </tr>
                    <tr>

                        <td><input type="number" name="uPhone" id="" placeholder="Enter your Phone no" value="<?php echo $uPhone ?>"></td>
                    </tr>
                    <tr>

                        <td><input type="text" name="uPassword" id="" placeholder="Create Password" value="<?php echo $uPassword ?>"></td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center">

                            <input type="submit" value="Update" id="rbtn">

                        </td>
                    </tr>


                </table>
            </form>

        </div>


    </div>



    </div>



</body>

</html>