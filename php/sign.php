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
        <link rel="stylesheet" href="../css/signup.css">
        <title>RR Parking - Sign up</title>
    </head>

    <body>
        <!--header-->
        <header>
            <img src="../images/header-footer/Logo.jpg" class="logo">
        <nav>
            <ul class="links">
                <li class="links"><a href="./index.html">Home</a></li>
                <li class="links"><a href="#">FAQ's</a></li>
                <li class="links"><a href="#">About us </a></li>
                <li class="links"><a href="#">Privacy policy </a></li>
                <li class="links"><a href="#">Customer reviews </a></li>
                <li class="links"><a href="#">Contact us</a></li>
                <li class="links"><a href="#">Offers</a></li>
                <li class="links"><a href="#">Locations</a></li>
            </ul>
        </nav>
        <a href="./login.html" class="account">
            <button class="btn-primary"> Log in </button>
        </a>
        </header>
        <!--end-header-->

        <div class="sign-container">
            <div class="signup-container">
                <div class="signup-card signup-form-container">
                    <h5 class="h5">Sign up Now</h5>

                    <form action="../php/signn.php" method="POST">

                        <div class="s-1 form-input-box">
                            <label for="name" class="sform-label">Your Name</label>
                            <input type="text" name="Name" class="sform-control" id="password">
                        </div>

                        <div class="s-1 form-input-box">
                            <label for="name" class="sform-label">Username</label>
                            <input type="text" name="Username" class="sform-control" id="password">
                        </div>

                        <div class="s-1 form-input-box">
                            <label for="name" class="sform-label">Email</label>
                            <input type="email" name="E-mail" class="sform-control" id="password">
                        </div>

                        <div class="s-1 form-input-box">
                            <label for="name" class="sform-label">Password</label>
                            <input type="password" name="Password" class="sform-control" id="password">
                        </div>

                        <div class="s-1 form-input-box">
                            <label for="name" class="sform-label">Confirm-Password</label>
                            <input type="password" name="Confirm-Password" class="sform-control" id="password">
                        </div>

                        <div class="s-1 form-input-box">
                            <label for="name" class="sform-label">Mobile-Number</label>
                            <input type="text" name="Mobile-Number" class="sform-control" id="password">
                        </div>

                        <div class="s-1 form-app-box">
                            <input type="checkbox" class="sform-app-btn" id="password">
                            <label for="name" class="sform-app-label">Agree Privacy Policy</label>
                        </div>

                        <div class="form-btn">
                            <button type="submit" class="btn-1">Create Account</button>
                        </div>

                        <div class="form-end">
                            <p class="p-1">Already have an account? <a href="../html/login.html">Login</a></a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="copy">
            <p> &copy; COPYRIGHT @RRparking.com | 2020 - 2022 </p>
        </div>
    </body>
</html>