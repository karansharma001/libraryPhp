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
                <a href="./adminLogin.php">Admin Login</a>
            </div>
            <div class="nav-items">
                <a href="./userLogin.php">User Login</a>
            </div>

        </div>

    </div>

    <div class="scroll-txt">

        <marquee behavior="" direction="">This is a library mangagment system, and this site is still under development,
            our developers are working on it, till then hold on... </marquee>
    </div>

    <div class="main">

        <div class="main-itm">

            <form action="./userRegister.php" method="post">
                <table class="reg-form" cellspacing="0">
                    <tr>
                        <th colspan="2" class="u-reg">
                            <p>User Registration</p>
                        </th>
                    </tr>

                    <tr>

                        <td><input type="text" name="uName" id="" placeholder="Enter Your full Name"></td>
                    </tr>
                    <tr>

                        <td><input type="email" name="uEmail" id="" placeholder="Enter Your Email"></td>
                    </tr>
                    <tr>

                        <td><input type="number" name="uPhone" id="" placeholder="Enter your Phone no"></td>
                    </tr>
                    <tr>

                        <td><input type="text" name="uPassword" id="" placeholder="Create Password"></td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center" >

                            <input type="submit" value="Register" id="rbtn">

                        </td>
                    </tr>


                </table>
            </form>

        </div>


    </div>



</body>

</html>