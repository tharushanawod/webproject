<?php
    include ("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>EnchantedEvents | Sign Up</title>
    <link rel ="icon" href="images/Logo.png">
    <link rel="stylesheet" href="signup.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"/>
  </head>
  <body>
    <div class="mid">
      <form method ="POST">
        <h1>EnchantedEvents</h1>

        <div class="name">
          <div class="input-box">
            <input type="text" placeholder="First Name" name ="fname" required />
           
          </div>
          <div class="input-box">
            <input type="text" placeholder="Last Name" name ="lname" required />
            
          </div>
        </div>
        <div class="input-box">
          <input type="email" placeholder="Email" name ="email" required />
          <i class="bx bx-envelope"></i>
        </div>
        <div class="input-box">
          <input type="text" placeholder="Contact Number" name="mobileNo" required />
          <i class="bx bx-phone"></i>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Password" name ="pwd" required />
          <i class="bx bx-key"></i>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Re Enter Password" name ="repwd" required />
          <i class="bx bx-key"></i>
        </div>
        

        <button type="submit" class="btn" name = "signup">Sign Up</button>

        <div class="register-link">
          <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
      </form>
    </div>

    <?php

    if (isset($_POST['signup'])) 
    {
        // Sanitize user inputs to prevent SQL injection
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);

        $lname  = mysqli_real_escape_string($conn, $_POST['lname']);

        $email = mysqli_real_escape_string($conn, $_POST['email']);

        $mobileNo = mysqli_real_escape_string($conn, $_POST['mobileNo']);

        $password = mysqli_real_escape_string($conn, $_POST['pwd']);

        $password_recheck = mysqli_real_escape_string($conn, $_POST['repwd']);

        if($password == $password_recheck)  {
          // Query to insert data into the database
          $query = "INSERT INTO tblusers(fname, lname, email, mobileNo, password) VALUES ('$fname', '$lname', '$email', '$mobileNo', '$password')";

          // Perform the query
          $result = mysqli_query($conn, $query);

          if ($result) 
          {
            echo "<script>alert('Your Account Was Created Successfully')</script>";

            echo "<script>window.location.href='login.php';</script>";
                
            exit;
          } 
          else 
          {
            echo "Error: " . mysqli_error($conn);
          }
        }

        else  {
          echo "<script>alert('Passwords do not match')</script>";
        }

        
    }
    ?>
  </body>
</html>
