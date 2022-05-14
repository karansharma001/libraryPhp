<?php
session_start();
include "../db_connection.php";

$aName = $_POST["aName"];
$aEmail = $_POST["aEmail"];
$aPhone = $_POST["aPhone"];
$aPassword = $_POST["aPassword"];

$updateQuery = "update admin set aName = '$aName', aEmail = '$aEmail', aPhone = $aPhone, aPassword = '$aPassword' where aId = $_SESSION[adminId]";

$response = mysqli_query($connect, $updateQuery);

if ($response) {
    ?>
    <script>
        alert("Your Profile was updated!");
        window.location.href = "../adminLogin.php";
        
    </script>
    <?php
} else {
    ?>
    <script>
        alert("Error!! Can't update your profile...");
        window.location.href = "./admin_update.php";
        
    </script>
    <?php
}


?>