<?php
session_start();
include "./db_connection.php";

$uName = $_POST["uName"];
$uEmail = $_POST["uEmail"];
$uPhone = $_POST["uPhone"];
$uPassword = $_POST["uPassword"];

$updateQuery = "update users set uName = '$uName', uEmail = '$uEmail', uPhone = $uPhone, uPassword = '$uPassword' where uId = $_SESSION[userID]";

$response = mysqli_query($connect, $updateQuery);

if ($response) {
    ?>
    <script>
        alert("Your Profile was updated!");
        window.location.href = "./userLogin.php";
        
    </script>
    <?php
} else {
    ?>
    <script>
        alert("Error!! Can't update your profile...");
        window.location.href = "./edit_userProfile.php";
        
    </script>
    <?php
}


?>