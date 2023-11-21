<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MIA BOOK CORNER</title>
    <link rel="stylesheet" href="./Style/home.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Navbar Section -->
    <nav class="navbar">
      <div class="navbar__container">
        <a href="/" id="navbar__logo"><i class="fas fa-gem"></i>BOOK CORNER</a>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="/" class="navbar__links">Home</a>
          </li>
          <li class="navbar__item">
            <a href="/tech.html" class="navbar__links">About us</a>
          </li>
          <li class="navbar__item">
            <a href="/" class="navbar__links">Books</a>
          </li>
          <li class="navbar__btn"><a href="logout.php" class="button">Log out</a></li>
        </ul>
      </div>
    </nav>

    <!-- Hero Section -->
    <div class="main">
      <div class="main__container">
        <div class="main__content">
          <h1>MIA</h1>
          <h2>BOOK CORNER</h2>
          <p>Books are a uniquely portable magic.</p>
          <button class="main__btn"><a href="#">Start your book journey</a></button>
        </div>
        <div class="main__img--container">
          <img id="main__img" src="./Assets/Mia.png" />
        </div>
      </div>
    </div>

    <!-- Services Section -->
    <div class="services">
      <h1>WHAT'S NEW?</h1>
      <div class="services__container">
        <div class="services__card">
          <img src="../Assets/images/280473528_162302746247057_2331485520214321727_n.jpg" style="width: 400px; height: 370px;">
          <h2>Chuyện con ốc sên muốn biết...</h2>
          <p>Luis Sepúlveda</p>
          <button>BUY</button>
        </div>
        <div class="services__card">  
          <IMG src="../Assets/images/book.jpg" style="width: 400px; height: 370px;"></IMG>
          <h2>Cà phê cùng Tony</h2>
          <p>Tony Buổi Sáng</p>
          <button>BUY</button>
        </div>
      </div>
    </div>

        <!-- Services Section -->
        <div class="services">
          <h1 style="margin-top: 10px;">BEST SELLING</h1>
          <div class="services__container">
            <div class="services__card">
              <img src="../Assets/images/280473528_162302746247057_2331485520214321727_n.jpg" style="width: 400px; height: 370px;">
              <h2>Chuyện con ốc sên muốn biết...</h2>
              <p>Luis Sepúlveda</p>
              <button>BUY</button>
            </div>
            <div class="services__card">  
              <IMG src="../Assets/images/book.jpg" style="width: 400px; height: 370px;"></IMG>
              <h2>Cà phê cùng Tony</h2>
              <p>Tony Buổi Sáng</p>
              <button>BUY</button>
            </div>
          </div>
        </div>

    <!-- Footer Section -->
    <div class="footer__container">
      <div class="footer__links">
        <div class="footer__link--wrapper">
          <div class="footer__link--items">
            <h2>About Us</h2>
            <a href="/sign__up">How it works</a> <a href="/">Testimonials</a>
            <a href="/">Careers</a> <a href="/">Investments</a>
            <a href="/">Terms of Service</a>
          </div>
          <div class="footer__link--items">
            <h2>Contact Us</h2>
            <a href="/">Contact</a> <a href="/">Support</a>
            <a href="/">Destinations</a> <a href="/">Sponsorships</a>
          </div>
        </div>
        <div class="footer__link--wrapper">
          <div class="footer__link--items">
            <h2>Videos</h2>
            <a href="/">Submit Video</a> <a href="/">Ambassadors</a>
            <a href="/">Agency</a> <a href="/">Influencer</a>
          </div>
          <div class="footer__link--items">
            <h2>Social Media</h2>
            <a href="/">Instagram</a> <a href="/">Facebook</a>
            <a href="/">Youtube</a> <a href="/">Twitter</a>
          </div>
        </div>
      </div>
      <section class="social__media">
        <div class="social__media--wrap">
          <div class="footer__logo">
            <a href="/" id="footer__logo"><i class="fas fa-gem"></i>NEXT</a>
          </div>
          <p class="website__rights">© NEXT 2020. All rights reserved</p>
          <div class="social__icons">
            <a
              class="social__icon--link"
              href="/"
              target="_blank"
              aria-label="Facebook"
            >
              <i class="fab fa-facebook"></i>
            </a>
            <a
              class="social__icon--link"
              href="/"
              target="_blank"
              aria-label="Instagram"
            >
              <i class="fab fa-instagram"></i>
            </a>
            <a
              class="social__icon--link"
              href="//www.youtube.com/channel/UCsKsymTY_4BYR-wytLjex7A?view_as=subscriber"
              target="_blank"
              aria-label="Youtube"
            >
              <i class="fab fa-youtube"></i>
            </a>
            <a
              class="social__icon--link"
              href="/"
              target="_blank"
              aria-label="Twitter"
            >
              <i class="fab fa-twitter"></i>
            </a>
            <a
              class="social__icon--link"
              href="/"
              target="_blank"
              aria-label="LinkedIn"
            >
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
        </div>
      </section>
    </div>
    <script src="app.js"></script>
  </body>
</html>


<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>