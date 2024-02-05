<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/header.css">
</head>



<link rel="stylesheet" href="../css/Aboutt us.css">
<title>RR Parking - Login</title>



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

<div class="h11">
    <div class="h22"><center><h1>About us</h1></center></div>
    
</div>


<section class="about">
 <div class="main1">
    <img src="../images/about-us/ourteam4.png">
       <div class="about-text1">
           <h1>Our Team</h1>
     
           <p> Our team is made up of talented experts that dedicate themselves
                to helping us rule the realm of prosperity. Our employees are
                 highly skilled and experienced, and they are driven to achieve 
                 complete customer satisfaction. Aside from that, these professionals
                  attend training sessions to keep up with the latest market developments
                   and innovations. </p>

       </div>

 </div>
</section>
                                                             
<section class="about">
    <div class="main1">
 
          <div class="about-text1">
              <h1>Our Infrastructure</h1>
    
              <p> We have had a robust infrastructure unit since the beginning 
                  of our company. This infrastructure section is run by professionals
                   and equipped with cutting-edge technologies. In addition, we have the
                    ability to complete assignments ranging from modest to large numbers for our
                     full product line. </p>
             
          </div>
   
          <img src="../images/about-us/Our Infrastructure.webp">
    </div>
   </section>

   <section class="about">
    <div class="main1">
        <img src="../images/about-us/why us2.jpg">
          <div class="about-text1">
              <h1>Why us?</h1>
       
              <p>We have secured a distinct position in the market with our offered 
                  car parking system. In addition to this, owing to our vast distribution 
                  channel, we are able to deliver products to patrons who are based at
                   diverse locations and also at affordable price. </p>

                   <a href="./ourmisions.php" class="button">Our Mission</a>
                  
          </div>
     
    </div>
   </section>



   

   <div class="container">
    <div class="contact-box">
        <div class="left"></div>
        <div class="right">
            <h2>What do you thing about us?<br>
            </h2>
            <form method="post" action="../php/aboutform.php">
            <input type="text" class="field" name="User_Name" placeholder="Your Name" required autocomplete="off">
            <input type="text" class="field" name="User_Email" placeholder="Your Email" required autocomplete="off">
            <input type="text" class="field" name="User_Phone" placeholder="Phone" required autocomplete="off">
            <textarea placeholder="Your Thought" name="User_Question" class="field" required autocomplete="off"></textarea>
            <textarea placeholder="How can we improve?" name="User_Comment" class="field" required autocomplete="off"></textarea>
            <input type="submit" value="Submit" class="btn" id="sub">
            </form>
        </div>
    </div>
</div>







<div class="copy">
    <p> &copy; COPYRIGHT @RRparking.com | 2020 - 2022 </p>
</div>
<!-- end: footer -->
</body>

</html>