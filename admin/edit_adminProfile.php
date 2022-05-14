<?php

session_start();
include "../db_connection.php";

$_SESSION['adminId'] = $_SESSION['aId'];

$aName = "";
$aEmail = "";
$aPhone = "";
$aPassword = "";

$query = "select * from admin where aId = $_SESSION[aId]";
$runquery = mysqli_query($connect, $query);
while ($row = mysqli_fetch_assoc($runquery)) {
    $aName = $row['aName'];
    $aEmail = $row['aEmail'];
    $aPhone = $row['aPhone'];
    $aPassword = $row['aPassword'];
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/userdashboard.css">
    <title>Edit Profile <?php echo $aName; ?></title>
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
                <a href="./admin_logout.php">Logout</a>
            </div>


        </div>

    </div>

    <div class="main">

        <div class="main-itm">

            <form action="./admin_update.php" method="post">
                <table class="reg-form" cellspacing="0">
                    <tr>
                        <th colspan="2" class="u-reg">
                            <p>Update Admin Details</p>
                        </th>
                    </tr>

                    <tr>

                        <td><input type="text" name="aName" id="" placeholder="Enter Your full Name" value="<?php echo $aName ?>"></td>
                    </tr>
                    <tr>

                        <td><input type="email" name="aEmail" id="" placeholder="Enter Your Email" value="<?php echo $aEmail; ?>" ></td>
                    </tr>
                    <tr>

                        <td><input type="number" name="aPhone" id="" placeholder="Enter your Phone no" value="<?php echo $aPhone ?>"></td>
                    </tr>
                    <tr>

                        <td><input type="text" name="aPassword" id="" placeholder="Create Password" value="<?php echo $aPassword ?>"></td>
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