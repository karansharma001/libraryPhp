<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Index</title>
</head>

<body>


    <div class="nav">
        <div class="logo">
            <h2>LMS</h2>
        </div>

        <div class="navbar">
            <div class="nav-items">
                <a href="./userLogin.php">User Login</a>
            </div>
            <div class="nav-items">
                <a href="./index.php">Register</a>
            </div>

        </div>

    </div>

    <div class="scroll-txt">

        <marquee behavior="" direction="">This is a library mangagment system, and this site is still under development,
            our developers are working on it, till then hold on... </marquee>
    </div>

    <div class="main">

        <div class="main-itm">

            <form action="" method="post">
                <table class="reg-form" cellspacing="0">
                    <tr>
                        <th colspan="2" class="u-reg">
                            <p>Admin Login</p>
                        </th>
                    </tr>


                    <tr>

                        <td><input type="email" name="aEmail" id="" placeholder="Enter Your Email"></td>
                    </tr>

                    <tr>

                        <td><input type="text" name="aPassword" id="" placeholder="Enter password"></td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center">

                            <input type="submit" name="login" value="login" id="rbtn">

                        </td>
                    </tr>


                </table>
            </form>

        </div>


    </div>


    <?php

    session_start();
    include "./db_connection.php";

    if (isset($_POST['login'])) {

        $email = $_POST["aEmail"];
        $pass = $_POST["aPassword"];

        $query = "select * from admin where aEmail = '$email'";
        $login_query = mysqli_query($connect, $query);

        while ($row = mysqli_fetch_assoc($login_query)) {
            if ($row["aEmail"] == $email) {
                if ($row['aPassword'] == $pass) {
                    $_SESSION["aName"] = $row["aName"];
                    $_SESSION["aEmail"] = $row["aEmail"];
                    $_SESSION["aPhone"] = $row["aPhone"];
                    header("Location:./admin/admin_dashboard.php");
                    $_SESSION["aId"] = $row["aId"];
                    // echo "login success";
                } else {
                    echo "wrong password";
                }
            } else {
                echo "wrong email";
            }
        }
    }

    ?>




</body>

</html>