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
    <link href="styles3.css" rel="stylesheet"/>
    
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

     <!-- Map -->
     <h2 class="title-text">Physical Store Location</h2>
    <div class="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.1286302068283!2d121.07453307592023!3d14.705316974502656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b09dd7dc83d3%3A0x3228afc65c5c661!2sAnimal%20World%20Pet%20Clinic!5e0!3m2!1sen!2sph!4v1726242797445!5m2!1sen!2sph" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
 
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