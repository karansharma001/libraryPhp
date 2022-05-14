<?php

session_start(); 
include "./db_connection.php";

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
    <title>User Profile <?php echo $uName; ?></title>
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
                <a href="./edit_userProfile.php">Edit Profile</a>
            </div>
            
            <div class="nav-items">
                <a href="./logout.php">Logout</a>
            </div>


        </div>

    </div>

    <div class="user-data">
        <table class="udata-table" cellspacing= "0">
            <tr>
                <th colspan="2">Account details: <?php echo $uName;  ?></th>
            </tr>
            <tr>
                <td><b>Name</b></td>
                <td><?php echo $uName;  ?></td>
            </tr>
            <tr>
                <td><b>E-mail</b></td>
                <td><?php echo $uEmail;  ?></td>
            </tr>
            <tr>
                <td><b>Phone no</b></td>
                <td><?php echo $uPhone;  ?></td>
            </tr>
            <tr>
                <td><b>Password</b></td>
                <td><?php echo $uPassword;  ?></td>
            </tr>
        </table>
    </div>



</body>

</html>