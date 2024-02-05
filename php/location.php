<?php 

date_default_timezone_set('srilanka/utc');
include 'dbh.php';
include 'comments.php';


?>




<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/location.css">
    <link rel="stylesheet" href="../css/style.css">
    
    </head>
    <body>

      <!-- header -->
      <header>
        <img src="../images/header-footer/Logo.jpg" class="logo">
        <nav>
            <ul class="links ul-nav">
                <li class="links"><a href="./index.php">Home</a></li>
                <li class="links"><a href="./FAQs.php">FAQ's</a></li>
                <li class="links"><a href="./About us.php">About us </a></li>
                <li class="links"><a href="./privacypolicy.php">Privacy policy </a></li>
                <li class="links"><a href="./reviews.php">Customer reviews </a></li>
                <li class="links"><a href="./contactt.php">Contact us</a></li>
                <li class="links"><a href="./offer.php">Offers</a></li>
                <li class="links"><a href="./location.php">Locations</a></li>
            </ul>
        </nav>
         <a href="./login.php" class="account">
            <button class="btn-primary"> Log in </button>
        </a> 
        <div></div>
    </header>
    <!-- end: header -->

    <div class = "containerr">
        <!-- Page name -->
        <h2 class="head"> <b><u> Locations </u></b></h2>
        <!-- End Page name -->
    </div>

    <!-- creating box content texts -->
    <section class="big">
       
        <div class="containerr">
            <div class="box1">
                <h3>Head Office</h3>
                <p>25,
                    <br>Rosmead Place,
                    <br>Colombo 7,
                    <br> Sri Lanka.
                    <br><br> General: +94 (0)11 232 5840 
                    <br><br> E mail: rrparking@gmail.com
                    <br> <br> Open all 7 Days 
                    <br>Open Hours 
                    <br>06.00am to 10.00pm from Monday to Friday
                    <br>07.00am to 08.00pm on Saturdays & Sundays
                 </p>
            </div>
            <div class="box2">
                <h3>Kandy</h3>
                <p>159,
                    <br>Robert Mawatha,
                    <br>Kandy,
                    <br>Sri Lanka.
                    <br><br>General: +94 (0)31 531 3131
                    <br><br> E mail: kandyrrparking@gmail.com
                    <br> <br> Open all 7 Days 
                    <br>Open Hours 
                    <br>06.00am to 10.00pm from Monday to Friday
                    <br>07.00am to 08.00pm on Saturdays & Sundays
                 </p>
            </div>
            <div class="box3">
                <h3>Kadawatha</h3>
                <p>279,
                    <br>Sapugaskanda Road,
                    <br>Kadawatha,
                    <br>Sri Lanka.
                    <br><br>General: +94 (0)22 259 9682
                    <br><br> E mail: kadawatharrparking@gmail.com
                    <br> <br> Open all 7 Days 
                    <br>Open Hours 
                    <br>06.00am to 10.00pm from Monday to Friday
                    <br>07.00am to 08.00pm on Saturdays & Sundays
                </p>
          </div>
        
    </section>
  <section class= "small">
    <div class="box4"> 
        <h3>Galle</h3>
        <p>23,
            <br> Mahawa Junction,
            <br>Galle,
            <br>Sri Lanka.
            <br><br>General: +94 (0)11 233 8730 
            <br><br> E mail: gallerrparking@gmail.com
            <br> <br> Open all 7 Days 
            <br>Open Hours 
            <br>06.00am to 10.00pm from Monday to Friday
            <br>07.00am to 08.00pm on Saturdays & Sundays
        </p>
    </div>
<div class="map1">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1642265.068749515!2d80.03822992633948!3d7.611647852182233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593cf65a1e9d%3A0xe13da4b400e2d38c!2sSri%20Lanka!5e0!3m2!1sen!2ssg!4v1652862886924!5m2!1sen!2ssg" 
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"> </iframe> 
    
    </div>


      </section>
    
    <!-- End of creating box content texts -->




















  



    <?php
echo "<form method = 'post' action='".setComments($conn)."'>
    <input type='hidden' name='uid' value=''> 
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'> 
    <textarea name='message'> </textarea> <br>
    <button type='submit' name= 'commentSubmit'> New suggesions </button>
</form>";
?>













    
    <div class="copy">
        <p> &copy; COPYRIGHT @RRparking.com | 2020 - 2022 </p>
    </div>
    <!-- end: footer -->















</body>
</html>
