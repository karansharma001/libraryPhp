<?php

session_start(); 
include "../db_connection.php";

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
    <title>Admin Profile <?php echo $aName; ?></title>
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
                <a href="./edit_adminProfile.php">Edit Account Details</a>
            </div>
            
            <div class="nav-items">
                <a href="././admin_logout.php">Logout</a>
            </div>


        </div>

    </div>

    <div class="user-data">
        <table class="udata-table" cellspacing= "0">
            <tr>
                <th colspan="2">Account details: <?php echo $aName;  ?></th>
            </tr>
            <tr>
                <td><b>Admin Name</b></td>
                <td><?php echo $aName;  ?></td>
            </tr>
            <tr>
                <td><b>Admin E-mail</b></td>
                <td><?php echo $aEmail;  ?></td>
            </tr>
            <tr>
                <td><b>Admin Phone no</b></td>
                <td><?php echo $aPhone;  ?></td>
            </tr>
            <tr>
                <td><b>Admin Password</b></td>
                <td><?php echo $aPassword;  ?></td>
            </tr>
        </table>
    </div>



</body>

</html>