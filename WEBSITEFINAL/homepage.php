<?php
// Future PHP code can be added here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kick and Co., Shoe Store</title>
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Faster+One&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet" />
    <link href="styles.css" rel="stylesheet"/>
    <link href="styles1.css" rel="stylesheet"/>
    
</head>
<body>
    <!-- Header -->
    <header>
    <!-- Navigation -->
        <nav class ="navbar">
            <div class="logo">
                <img src="images/Logo.png" alt="Company Logo">
            </div>
            <ul class="nav-links">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="men.php">Men</a></li>
                <li><a href="women.php">Women</a></li>
                <li><a href="clearance.php">Clearance</a></li>
                <li><a href="location.php">Location</a></li>
            </ul>
        </nav>
    </header>

    <!-- Banner Container -->
    <div class="banner-container">
      <div class="mySlides fade">
        <img src="images/banner1.jpeg">
      </div>
      <div class="mySlides fade">
        <img src="images/banner2.jpeg">
      </div>
      <div class="mySlides fade">
        <img src="images/banner3.jpeg">
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
    </div>

<main>    
  <!-- Featured Shoes Section -->
  <section class="featured-shoes">
    <hr class="divider" /> 
    <h1>Featured Shoes</h1>
    <div>
      <img src="images/shoe1.png" alt="Air Jordan 1 Retro Bred">
      <p>Air Jordan 1 Retro Bred (1984)</p>
    </div>
    <div>
      <img src="images/shoe2.png" alt="Air Jordan 4 Retro x KAWS">
      <p>Air Jordan 4 Retro x KAWS</p>
    </div>
    <div>
      <img src="images/shoe3.png" alt="Jordan 1 Retro High Off-White">
      <p>Jordan 1 Retro High Off-White</p>
    </div>
    <div>
      <img src="images/shoe4.png" alt="Yeezy Boost 350 V2 Black">
      <p>Yeezy Boost 350 V2 Black</p>
    </div>
    <hr class="divider" /> 
  </section>


  <!-- Associated Brands Section -->
  <section class="brands">
    <h1>Associated Brands</h1>
    <div>
      <a href="https://www.nike.com/ph/"><img src="images/nike.png" alt="Nike"></a>
      <a href="https://www.adidas.com.ph/"><img src="images/adidas.png" alt="Adidas"></a>
      <a href="https://ph.puma.com/ph/en/home"><img src="images/puma.png" alt="Puma"></a>
      <a href="https://www.newbalance.com/"><img src="images/newbalance.png" alt="New Balance"></a>
      <a href="https://www.vans.com/en-us?_sr=1"><img src="images/vans.png" alt="Vans"></a>
      <a href="https://www.ph.skechers.com/"><img src="images/skechers.png" alt="Skechers"></a>
    </div>
  </section>
</main>

  <!-- Footer -->
  <footer class="footer-background">
    <div class="footer-titles">
      <h2>Socials:</h2>
      <h2>Payment Options:</h2>
    </div>
    <div class="footer-content">
      <div class="footer-wrap">
        <div class="social-icons">
          <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer">
            <img src="images/facebook.png" alt="Facebook" class="icon">
          </a>
          <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer">
            <img src="images/instagram.png" alt="Instagram" class="icon">
          </a>
          <a href="https://www.youtube.com" target="_blank" rel="noopener noreferrer">
            <img src="images/youtube.png" alt="YouTube" class="icon">
          </a>
          <a href="https://www.twitter.com" target="_blank" rel="noopener noreferrer">
            <img src="images/twitter.png" alt="Twitter" class="icon">
          </a>
        </div>
        <div class="payment-icons">
            <img src="images/visa.png" alt="Visa" class="icon">
            <img src="images/mastercard.png" alt="Mastercard" class="icon">
            <img src="images/gcash.png" alt="GCash" class="icon">
        </div>
        </div>
        <p class="end-text">Kick and Co. Inc. &copy; 2024. All Rights Reserved.</p>
    </div>
  </footer>
  <script src="main1.js"></script>
</body>
</html>