<?php 
$username = null;
session_start();

if(isset($_SESSION['user'])) {
    $username = $_SESSION['user'];
}

?>

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
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/home.css">
    <script src="../js/home.js"></script>

    <title>RR Parking</title>
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
        <?php if($username == null):?>
            <a href="./login.php" class="account">
                <button class="btn-primary"> Log in </button>
            </a>
        <?php else: ?>
            <p class="username btn-primary">Welcome, <?php echo $username; ?>!</p>
        <?php endif ?>
    </header>
    <!-- end: header -->

    <div class="container">
        <!-- tagline -->
        <h3 class="h3 tagline">Find a place to safely park your vehicle</h4>
            <!-- end: tagline -->

            <!-- carousel (slideshow) -->
            <div class="slideshow-container">
                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <img class="carousel-image" src="../images/carousel/1.jpg">
                </div>

                <div class="mySlides fade">
                    <img class="carousel-image" src="../images/carousel/2.jpg">
                </div>

                <div class="mySlides fade">
                    <img class="carousel-image" src="../images/carousel/3.jpg">
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>

            <!-- end: carousel -->

            <!-- call to action button -->
            <div class="row action-button-container">
                <button class="btn-primary action-button">
                    <a href="./bookings.php">Book Now</a>
                </button>
            </div>
            <!-- call to action button -->

            <!-- car parks list (most visited) -->
            <div class="row mv-list">
                <h3 class="h3">Most visited car parks</h3>
                <ul class="mv-ul">
                    <li>
                        <div class="card-sh">
                            <img class="card-img-top list-img" src="../images/mv-list/1.jpg">
                            <div class="card-body">
                                <h5 class="card-title cp-name">Malabe Car Park</h5>
                                <p class="card-text slots">3 / 30 slots available</p>
                                <a href="./bookings.php" class="btn-primary">Reserve your slot</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card-sh">
                            <img class="card-img-top list-img" src="../images/mv-list/2.jpg">
                            <div class="card-body">
                                <h5 class="card-title cp-name">SLIIT Car Park</h5>
                                <p class="card-text slots">25 / 100 slots available</p>
                                <a href="./bookings.php" class="btn-primary">Reserve your slot</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card-sh">
                            <img class="card-img-top list-img" src="../images/mv-list/3.jpg">
                            <div class="card-body">
                                <h5 class="card-title cp-name">Cool Planet Car Park</h5>
                                <p class="card-text slots">2 / 10 slots available</p>
                                <a href="./bookings.php" class="btn-primary">Reserve your slot</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- end: car parks list -->
    </div>

    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="footer-content">
                <div class="footer-section about">
                    <b> Get to know us </b>
                    <br>

                    <ul class="footer-ul">
                        <li class="color"><a href="">About us </a> </li>
                        <li class="color"><a href="#">Privacy Policy </a></li>
                        <li class="color"> <a href="#/"> Terms &amp; Conditions </a></li>
                        <li class="color"> <a href="#">Contact us </a></li>
                        <li class="color"><a href="#"> Locations</a></li>
                    </ul>
                    <img src="../images/header-footer/card.png" alt="card" class="card">
                </div>

                <div class="footer-section contact ways">
                    <b> RRparking.com</b>
                    <p>
                        N0 220/A, <br>
                        Bauddhaloka Mawatha,<br>
                        Colombo 7. </p>
                    <br> Tel: +94 (0)112673699 <br> Email:rrparking@gmail.com
                    <img src="../images/header-footer/logo.jpg" alt="logo" class="logoo">
                    <img src="../images/header-footer/iconn.png" alt="icon" class="icon">
                </div>
            </div>
    </footer>
    <div class="copy">
        <p> &copy; COPYRIGHT @RRparking.com | 2020 - 2022 </p>
    </div>
    <!-- end: footer -->
</body>

</html>