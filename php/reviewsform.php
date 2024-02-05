<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/reviewsform.css">
        <title>RR-parking customer Reviews</title>

    </head>

    <body>
        
        <!-- header -->
        <header>
            <img src="../images/header-footer/Logo.jpg" class="logo">
            <nav>
            <ul class="links ul-nav">
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
            </header>
            <!-- end: header -->

        <div class="container">
            <h1>Add Your Review</h1>
            <form action="./customerReviews.php" method="POST">
                    <div class="form">
                        <div class="inputfield">
                            <label>Enter Your Name</label>
                            <div class="input-field input">
                                <input type="text" placeholder="Name" name="customer-name" autocomplete="off" required>
                            </div>                        
                        </div>
                    </div>
                    <div class="form">
                        <div class="inputfield">
                            <label>Enter Your E-mail Address</label>
                            <div class="input-field input">
                                <input type="text" placeholder="E-mail address" name="E-mail" autocomplete="off" required>
                            </div>                        
                        </div>
                    </div>
                <label>Enter Your Comment</label><br><br>
                <textarea name="Comment" id="textarea" placeholder="Type Your Review" cols="57" rows="10" autocomplete="off" required></textarea><br><br>
                <button type="submit" class="postbtn">Post Your review</button>
            </form>

        </div>   
            
            
            
                    
    </body>
</html>