<?php


?>
<html>
    <head>
        <title>Contact us</title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/contact.css"> 
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






















    </head>
    <body>
      <div class="contact-us">
          <h1>Struggling for something?</h1>
          <h2> We are always ready to serve you!</h2>
      </div>


     <div class = "contact-form"> 
         <form id ="contact-form" method ="post" action="contact.php">
             <input name="name" type="text" class="form-con" placeholder="Your Name" required>
             <br> 
             <input name="email" type="email" class="form-con" placeholder="Your Email" required>
             <br>
             <input name="contact" type="contact" class="form-con" placeholder="Contact Number" 
             required> <br>
             <textarea name="message" type="message" class="form-con" placeholder="Message" required>
             </textarea> <br>

             <input type="submit" class="form-con submit" value="SEND MESSAGE">
         </form>
     </div>

     <script>	 
        function validateForm() {
     let x = document.forms["myForm"]["name"].value;
     let a = document.forms["myForm"]["email"].value;
     let b = document.forms["myForm"]["contact"].value;
     let c = document.forms["myForm"]["message"].value;
     if (x == "")	 {
       alert("Name must be filled out");
       return false;
     }
     else if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(a))
     {
       return (true)
     }
     else
     {
     alert("You have entered an invalid email address!")
     return (false)
     }
     
    
     
    
   }
   </script>








     <div class="copy">
        <p> &copy; COPYRIGHT @RRparking.com | 2020 - 2022 </p>
    </div>
    <!-- end: footer -->
  
    </body>
    


</html>


