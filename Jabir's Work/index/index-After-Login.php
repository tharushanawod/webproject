<?php
    session_start();
    if(!isset($_SESSION['userId']))
    {
        header("location: ../login and signup/login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnchantedEvents | Home</title>
    <link rel="stylesheet" href="index-After-Login.css">
    <link rel ="icon" href="images/Logo.png">
    <script src="https://kit.fontawesome.com/f35c1c7a11.js" crossorigin="anonymous"></script>
</head>
<body>

    <!-- header section starts -->
         <!--header sction contains the Logo and the navigation bar only-->
    <header class="header">
      <span class ="letteredlogo">
        <span id = "logoId1">
          Enchanted<span class ="logo" id = "logoId2">Events</span>
        </span>
      </span>
  
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#aboutContainer">About Us</a>
            <a href="#servicesContainer">Our Services</a>
            <a href="#gallery">Manage Event</a>
            <a href="../viewProfile/view.php" target="_blank">View Profile</a>
            <a href="../viewProfile/edit.php" target="_blank">Edit Profile</a>
            <form method ="POST">
              <button class="logout-btn" name ="Logout">Logout</button>
            </form>
        </nav>
    </header>
    
    <?php
        if(isset($_POST['Logout']))
        {
            session_destroy();
            header("location: index-Before-Login.php");
        }
    ?>

    <!-- header section ends -->

    <div class="mainImage-container" id="home">

      <div class="text-overlay">
        <span class = "welcomePart">
          <h1>Welcome to EnchantedEvents</h1>
        </span>
        
        <div class="welcome-Message">
          <div class="message-lines">
            Your premier destination for
          </div>

          <div class="message-lines">
            unforgettable events and magical experiences. 
          </div>
            
          <div class="message-lines">
            Let's turn your dreams into enchanting realities.
          </div>
          
        </div>

        <div>
          <a href="../addBooking/booknow.php" target="_blank">
            <button class="booknow-btn">Book Now</button>
          </a>
        </div>
        

      </div>
    </div>

    <div id = "aboutContainer">                                 <!--Start of the container which contain the About Us and the TaxiPark logo-->
      <div class = "aboutUs">                                       <!--Start of the About Us will be on the left handed side of the page-->
          <br>
          <h1 class = "aboutUs-heading">
              About Us
          </h1>
          <br>

          <p class = "aboutUS-content">
              Welcome to EnchantedEvents, where every event is transformed into an unforgettable masterpiece! 
              We are not just event managers; we are creators of extraordinary experiences, weaving magic into every moment. 
              At EnchantedEvents, we understand that each event is a unique celebration of life, love, and milestones. 
              Our passion lies in turning your dreams into reality, one event at a time.
              <br><br>
              EnchantedEvents is not just a name; it's a commitment to excellence in event management. 
              Established with the belief that every celebration deserves to be exceptional, 
              we bring together a team of creative visionaries, meticulous planners, and passionate professionals. 
              Our collective goal is to craft events that leave an indelible mark on your memories.
              <br><br>
              Join us at EnchantedEvents, where we don't just plan events; we craft memories that last a lifetime. 
              Let's embark on a journey to create your next extraordinary celebration together!
              <br><br>
          </p>
      </div>

       <div class = "logo-container">                                <!--Code segment to place the logo on the right side-->
          <img src ="images/Logo.png" style="width: 100%;">
      </div>
              
  </div>   

  <div style="display: flex;" id = "bigbox">                           <!--Start of the Container of service description-->

    <div id = "servicesContainer">                       
        <h1 class="services-topic">
            Here's What We Can 
            <br>
            Provide You
        </h1>
        <br>

        <p class = "services-content">
            Enchanted Events is not just an event management company; we are storytellers,
            creating narratives that unfold in magical settings. Your event is a canvas, 
            and we paint it with creativity, precision, and a touch of enchantment.
            <br><br>

            EnchantedEvents, we take pride in offering a comprehensive suite of services 
            that go beyond traditional event management. We don't just organize events; 
            we curate experiences that leave a lasting impression. Discover the range of 
            services that make us your go-to partner for crafting memorable celebrations:
            <br><br> 

            Enchanted Events is your partner in crafting unforgettable experiences. 
            <br>
            Let us turn your celebrations into magical stories that unfold in the most 
            enchanting settings. Contact us today and embark on a journey to create 
            memories that last a lifetime. EnchantedEvents, Where Dreams Come to Life!
        </p>   
    </div>

    <div style="display: block;" id = "r1&r2Cont"> 
      <div style="display: flex;" id = "row1">     
        <div class="box-container-topRow">
          <center>
            <div class="boxicon">
              <i class="fa-regular fa-heart"></i>
            </div>
            <b>Wedding Magic</b>
          </center>
          <br>
          Immerse yourself in the enchantment of your special day. 
          From venue selection and decor to catering and entertainment, 
          our wedding experts ensure that your love story is 
          celebrated in a way that is uniquely yours.
        </div>      

        <div class="box-container-topRow">
          <center>
            <div class="boxicon">
              <i class="fa fa-building"></i>
              <!--<i class="fa-solid fa-wine-glass" style="font-size: 50px;"></i>-->
            </div>
            <b>Corporate Elegance</b>
          </center>
          <br>
          Elevate your corporate events to new heights. 
          We go beyond logistics, meticulously planning and executing conferences, 
          product launches, and team-building activities, creating an atmosphere of professionalism and sophistication.
        </div>
      
        
      </div>

      <div style="display: flex;" id = "row2">  

        <div class="box-container-2ndRow">
          <center>
            <div class="boxicon">
              <i class="fa fa-birthday-cake"></i>
            </div>
            <b>Birthday Bliss</b>
          </center>
          <br>
          Dive into the joy of your special day with our birthday party organizing 
          expertise and Experience the magic of a birthday celebration that mirrors 
          your personality and leaves a lasting imprint of joy and laughter. 
        </div>

        <div class="box-container-2ndRow">
          <center>
            <div class="boxicon">
              <i class="fa-regular fa-handshake" ></i>
            </div>
            <b>Charity Charm</b>
          </center>
          <br>
          We ensure your cause shines at the forefront, aligning uniquely with 
          your mission. Experience the magic of purposeful gatherings, 
          where every detail inspires and leaves a lasting impact.
        </div>
      
        
      </div>
    </div>
  </div>

  <div class="footer">
    <p class="copyright">&COPY; 2024 EnchantedEvents, Inc. All rights reserved.</p>
</div>
  
</body>
</html>
