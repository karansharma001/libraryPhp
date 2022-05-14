<?php

include "./db_connection.php";

$uName = $_POST["uName"];
$uEmail = $_POST["uEmail"];
$uPhone = $_POST["uPhone"];
$uPassword = $_POST["uPassword"];

$insertQuery = "insert into users values (null, '$uName', '$uEmail', $uPhone, '$uPassword')";

$response = mysqli_query($connect, $insertQuery);

if ($response) {
    ?>
    <script>
        alert("You Are Registered! Login Now");
        window.location.href = "./userLogin.php";
        
    </script>
    <?php
} else {
    ?>
    <script>
        alert("You Not Registered! Try Again");
        window.location.href = "./index.php";
        
    </script>
    <?php
}


?>