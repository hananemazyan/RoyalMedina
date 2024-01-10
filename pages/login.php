<!DOCTYPE html>
<html lang="en">
<head>
<!-- Méta-informations -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Feuilles de style -->
    <link rel="stylesheet" href="/assets/css/login.css"> <!-- Feuille de style pour la page de connexion -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"  crossorigin="anonymous">

  <!-- Liens vers des bibliothèques externes -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"><!-- Boxicons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"><!-- Font Awesome -->
     <!-- Inclusion du script Bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                                    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<title>Login</title>
</head>
<body>

    <!-- Delivery message -->
    <div class="delivery-message" id="deliveryMessage">
        <p>FREE LIVRAISON IN MOROCCO OVER 1500 DH</p>
        <span id="closeIcon" class="close-icon">X</span>
    </div>
    <!-- Navigation -->
    <nav>
        <header>
            <a href="#" class="logo">ROYAL MEDINA</a>
            <ul class="navmenu">
             <!-- Menu de navigation -->
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
            <!-- Icônes de navigation -->
            <div class="nav-icon">
                <a href="#"><i class='bx bx-search'></i></a>
                <a href="/pages/"><i class='bx bx-user-circle'></i></a>
                <a href="#"><i class='bx bx-cart'></i></a>
                <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </header>
    </nav>

<!-- Formulaire de connexion -->

    <form action="/assets/php/userLogin.php" method="post">
    <div class="wrapper">
        <div class="container main">
            <div class="row">
             <!-- Colonne de l'image -->
                <div class="col-md-6 side-image" style="background-image: url('/assets/images/banner/Blackcaftan.jpg');">                   
                    <img src="" alt="Royal Medina Logo">
                </div>

            <!-- Colonne de droite pour le formulaire de connexion -->
            <div class="col-md-6 right">
                <form action="/assets/php/userLogin.php" method="post">
                        <div class="input-box">
                            <p>Login</p>
                            <div class="input-field">
                                <input type="text" class="input" name="email" id="email" required="" autocomplete="off">
                                <label for="email">Email</label> 
                            </div> 
                            <div class="input-field">
                                <input type="password" class="input" name="password" id="pass" required="">
                                <label for="pass">Password</label>
                            </div> 
                            <div class="input-field">                                
                                <input type="submit" class="submit" value="Sign in">
                            </div> 
                            <div class="signin">
                            <!-- Lien pour s'inscrire -->
                                <span>Don't have an account? <a href="/pages/singup.php">sign up here</a></span>
                            </div>
                        </div>  
                    </div>
                </form>
            </div>
        </div>
    </div>


<!-- footer -->
<div class="footer">
  <!-- Colonnes du footer -->
    <div class="col-1">
        <h3>USEFUL LINKS</h3>
        <a href="#">Collections</a>
        <a href="#">Story</a>
        <a href="#">Contact</a>
        <a href="#">Blog</a>
    </div>
    <div class="col-2">
        <h3>GET IN TOUCH AND JOIN IN OUR NEWSLETTER!</h3>
          <!-- Formulaire d'inscription à la newsletter -->
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
       <!-- Icônes sociales -->
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