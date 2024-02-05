<?php include '../config/database.php'; ?>

<?php
    // query to fetch data from offers table
    $offers = [];
    $sql_query_get = 'SELECT * FROM offers';
    $result = mysqli_query($connection, $sql_query_get);
    $offers = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
    <link rel="stylesheet" href="../css/offer.css">
    <title>RR Parking - Offers</title>
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



    <?php if(empty($offers)): ?>

    <p class="no-offer">Sorry, no offers available at the moment </p>

    <?php else: ?>
    <div class="er">
        <!-- Page name -->
        <h2 class="head"> <b>
            <center> <br>Trending deals for you!!! </center>
        </b></h2> <br> <br>
        <!-- End Page name -->
    </div>
    <div class="offerr">
        <?php foreach($offers as $aOffer): ?>
        <div class="offer_member">
            <h3><?php echo $aOffer['title'] ?></h3>
            <p class="role"><?php echo $aOffer['subtitle'] ?></p>
            <p><?php echo $aOffer['description'] ?></p>
            <a href="#" class="buttonn">Add offer</a>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <div class="copy">
        <p> &copy; COPYRIGHT @RRparking.com | 2020 - 2022 </p>
    </div>
    <!-- end: footer -->

</body>

</html>