<!DOCTYPE html>
<html>
<head>
    <!-- *******  Link To CSS Style Sheet  ******* -->
    <link rel="stylesheet" type="text/css" href="/assets/css/customercare.css">
    
    <!-- *******   Icons Link  ******* -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- *******  Link To Goggle Fonts  *******  -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,800;1,900&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>contact Section</title>
</head>
<body>

        <!-- Delivery message -->
        <div class="delivery-message" id="deliveryMessage">
            <p>FREE SHIPPING IN MOROCCO OVER 1500 DH</p>
            <span id="closeIcon" class="close-icon">X</span>
        </div>
    
        <!--navigation -->
        <nav>
            <header>
                <a href="/RoyalMedina/pages/index.php" class="logo">ROYAL MEDINA </a>
                <ul class="navmenu">
                    <li><a href="/RoyalMedina/pages/collection.php">COLLECTIONS</a>
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
                            <li><a href="/RoyalMedina/pages/">RETURNS</a></li>
                        </ul>
                    </li>
                    <li><a href="#">BLOG</a></li>
                </ul>
    
                <div class="nav-icon">
                    <a href="#"><i class='bx bx-search'></i></a>
                    <a href="/pages/login.php"><i class='bx bx-user-circle' ></i></a>
                    <a href="#"><i class='bx bx-cart' ></i></a>
                    <div class="bx bx-menu" id="menu-icon"></div>
                </div>
            </header>
        </nav>
        
        <div class="container">
            <main class="row">
                <section class="col left">
                    <div class="contactTitle">
                        <h2>Get In Touch</h2>
                        <p>Fill out the form to get more informations about orders and products or to book an appointement </p>
                    </div>
                    
                    <div class="contactInfo">
                        <div class="iconGroup">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="details">
                                <span>Phone</span>
                                <span>+212 00 11 01 11</span>
                            </div>
                        </div>
                        
                        <div class="iconGroup">
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            
                            <div class="details">
                                <span>Email</span>
                                <span>Royal.Medina@gmail.com</span>
                            </div>
                        </div>
                        
                        <div class="iconGroup">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            
                            <div class="details">
                                <span>Location</span>
                                <span>Angle Boulevard Sidi Abderrahmane<br>Casablanca ,Maroc</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="socialMedia">
                        
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                         <a href="#"><i class="fa-brands fa-twitter"></i></a>
                         <a href="#"><i class="fa-brands fa-instagram"></i></a>
                         <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        
                        </div>
                    </section>
                    
        <section class="col right">
        <form class="messageForm" action="/assets/php/customercare.php" method="post">

<div class="inputGroup halfWidth">
    <input type="text" name="name" required="required"> <!-- Added name="name" -->
    <label>Your Name</label>
</div>

<div class="inputGroup halfWidth">
    <input type="email" name="email" required="required"> <!-- Added name="email" -->
    <label>Email</label>
</div>

<div class="inputGroup fullWidth">
    <input type="text" name="subject" required="required"> <!-- Added name="subject" -->
    <label>Subject</label>
</div>

<div class="inputGroup fullWidth">
    <textarea name="message" required="required"></textarea> <!-- Added name="message" -->
    <label>Message</label>
</div>

<div class="inputGroup fullWidth">
    <button type="submit">Send</button>
</div>

</form>


        </section>
    </main>
</div>

    <!-- footer -->
    <div class="footer">
        <div class="col-1">
            <h3>USEFUL LINKS</h3>
            <a href="#">Collections</a>
            <a href="#">Story</a>
            <a href="#">Contact</a>
            <a href="#">Blog</a>
        </div>
        <div class="col-2">
            <h3>GET IN TOUCH AND JOIN IN OUR NEWSLETTER!</h3>
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
<script src="/RoyalMedina/assets/js/main.js"></script>

</body>
</html>