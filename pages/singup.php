<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Stylesheets -->
 <link rel="stylesheet" href="/assets/css/style.css"><!-- Custom general styles -->
    <link rel="stylesheet" href="/assets/css/login.css"><!-- Custom styles for login page -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <!-- Boxicons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Login</title>


</head>
<body>
    <!-- Delivery message -->
    <div class="delivery-message" id="deliveryMessage">
        <p>FREE LIVRAISON IN MOROCCO OVER 1500 DH</p>
        <span id="closeIcon" class="close-icon">X</span><!-- Close icon for the delivery message -->
    </div>
    <!--navigation -->
    <nav>
        <header>
            <a href="#" class="logo">ROYAL MEDINA </a>
            <!-- Navigation menu -->
            <ul class="navmenu">
                <li><a href="/pages/collection.php">COLLECTIONS</a>
                    <ul class="submenu">
                        <li><a href="#">CAFTAN</a></li>
                        <li><a href="#">JEWELRY</a></li>
                        <li><a href="#">SHOES</a></li>
                    </ul>
                </li>
                <li><a href="/pages/ourstory.php">STORY</a></li>
                <li><a href="#">CONTACT</a>
                    <ul class="submenu">
                        <li><a href="/pages/customercare.php">CUSTOMER CARE</a></li>
                        <li><a href="/pages/">RETURNS</a></li>
                    </ul>
                </li>
                <li><a href="#">BLOG</a></li>
            </ul>
<!-- Navigation icons -->
            <div class="nav-icon">
                <a href="#"><i class='bx bx-search'></i></a>
                <a href="/pages/"><i class='bx bx-user-circle' ></i></a>
                <a href="#"><i class='bx bx-cart' ></i></a>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </header>
    </nav>
 <!-- Main content -->
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <!-- Side image column -->
                <div class="col-md-6 side-image" style="background-image: url('/assets/images/banner/Blackcaftan.jpg');">
                <img src="/assets/images/logo_try-removebg-preview.png" alt="">
                    <div class="text">
                    </div>
                </div>
                <!-- Right column for registration form -->
    <div class="col-md-6 right">
        <div class="input-box">
            <p>Create account</p>
            <form method="post" action="/assets/php/register.php"> <!-- Update the action attribute -->
<!-- Input fields for registration -->
                <div class="input-field">
                    <input type="text" name="name" class="input" id="name" required="" autocomplete="off">
                    <label for="name">Name</label>
                </div>
    
                <div class="input-field">
                    <input type="text" name="surname" class="input" id="surname" required="" autocomplete="off">
                    <label for="surname">Surname</label>
                </div>
    
                <div class="input-field">
                    <input type="text" name="email" class="input" id="email" required="" autocomplete="off">
                    <label for="email">Email</label>
                </div>
    
                <div class="input-field">
                    <input type="password" name="password" class="input" id="pass" required="">
                    <label for="pass">Password</label>
                </div>
    
                <div class="input-field">
                    <input type="submit" name="register" class="submit" value="Sign up">
                </div>
            </form>
            <!-- Sign in link -->
            <div class="signin">
                <span>You already have an account! <a href="/pages/login.php">Sign in here</a></span>
            </div>
        </div>
    </div>
            </div>
        </div> 
        
<!-- footer -->
<div class="footer">
<!-- Columns for footer -->
    <div class="col-1">
        <h3>USEFUL LINKS</h3>
        <a href="#">Collections</a>
        <a href="#">Story</a>
        <a href="#">Contact</a>
        <a href="#">Blog</a>
    </div>
    <div class="col-2">
        <h3>GET IN TOUCH AND JOIN IN OUR NEWSLETTER!</h3>
         <!-- Newsletter form -->
        <form>
            <input type="email" placeholder="Your Email Address" required>
            <br>
            <div class="checkboxes">
                <label>
                    <input type="checkbox" id="marketingCheckbox">
                    <p>I AUTHORIZE THE PROCESSING OF MY PERSONAL DATA FOR MARKETING, COMMERCIAL, MARKET RESEARCH,
                        PROFILING, AND ADVERTISING PURPOSES.</p>
                    <br>

                    <input type="checkbox" id="privacyCheckbox">
                    <p>I AUTHORIZE THE PROCESSING OF MY PERSONAL DATA IN THE WAY AND FOR THE PURPOSES LISTED IN THE
                        PRIVACY STATEMENT.</p>
                </label>
                <button type="submit">SUBSCRIBE NOW</button>
            </div>
        </form>
    </div>
    <div class="col-3">
        <h3>CONTACT</h3>
        <p>Angle Boulevard Sidi Abderrahmane <br> Casablanca, Maroc</p>
         <!-- Social icons -->
        <div class="social-icons">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-solid fa-envelope"></i>
        </div>
    </div>
</div>

    <!-- Copyright -->
<div class="copyright">
    <p>&copy; 2023 Your Company. All rights reserved.</p>
</div>
<script src="/assets/js/main.js"></script>

</body>
</html>