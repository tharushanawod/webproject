<?php
    include ("connection.php");

    /*if (isset($_COOKIE['remember_me']) && !isset($_SESSION['userId'])) {
        $email = $_COOKIE['remember_me'];
        $query = "SELECT * FROM `tblusers` WHERE `email` = '$email'";
        $result = mysqli_query($conn, $query);
    
        if (mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION['userId'] = $email;
            header("location: ../index/index-After-Login.php");
            exit;
        }
    }*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>EnchantedEvents | Login </title>
    <link rel ="icon" href="images/Logo.png">
    <link rel="stylesheet" href="login.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

</head>

<body>
    
    <div class="mid">
    <form method ="POST">
        <h1>EnchantedEvents</h1>

            <div class="input-box">
                <input type="email" placeholder="Email" name ="email" required>
                <i class="bx bx-envelope"></i>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Password" name ="pwd" required>
                <i class="bx bxs-lock-alt" ></i>
            </div>

            <!--
            <div class="remember-forgot">
                <label><input type="checkbox" name ="remember_me">Remember me</label>
                <a href="#" >Forgot Password?</a>
            </div>
            -->

            <button type="submit" class="btn" name ="login">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="signup.php">Register</a></p>
            </div>
    </form>
    </div>


    <?php
        if (isset($_POST['login']))
        {
            $query = "SELECT * FROM `tblusers` WHERE `email` = '$_POST[email]' AND `password` = '$_POST[pwd]'";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) == 1)
            {
                session_start();
                $userDetails = mysqli_fetch_assoc($result);
                $_SESSION['userId'] = $userDetails['userId'];

                // Check if "Remember Me" checkbox is checked

                /*if (isset($_POST['remember_me'])) {
                    // Set a cookie to remember the user
                    setcookie('remember_me', $_POST['email'], time() + (86400 * 30), "/"); // Cookie expires in 30 days
                }*/

                header("location: ../index/index-After-Login.php");
                exit;
            }
            else
            {
                echo "<script>alert('Oops Something Went Wrong!')</script>";
            }
        }

    ?>

</body>

</html>