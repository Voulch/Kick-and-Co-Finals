<?php
include 'admin/db.php';

$category = 'men';
$result = $conn->query("SELECT * FROM products WHERE category='$category'") or die($conn->error);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kick and Co., Shoe Store - Men</title>
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Faster+One&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="styles.css" rel="stylesheet"/>
    <link href="styles2.css" rel="stylesheet"/>
    <link href="styles5.css" rel="stylesheet"/>
</head>
<body>
    <header>
        <nav class="navbar">
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

    <button id="cart-button" onclick="toggleCart()">Cart <i class="fa fa-shopping-cart"></i></button>
    
    <div id="cart">
        <h3>Your Cart</h3>
        <div id="cart-items"></div>
        <p id="total"></p>
        <button id="checkout" onclick="checkout()">Checkout</button>
        <button id="close" onclick="toggleCart()">Close</button>
    </div>
    
    <h2 class="title-text">MEN'S SHOES</h2>
    <div class="products">
        <?php while ($row = $result->fetch_assoc()): ?>
        <div class="product">
            <div class="container">
                <a href="#">
                    <img src="images/<?= $row['image'] ?>" alt="<?= $row['name'] ?>" class="image">
                </a>
                <div class="middle">
                    <button class="button text" onclick="addToCart('<?= $row['name'] ?>', <?= $row['price'] ?>)">Add to Cart <i class="fa fa-shopping-cart"></i></button>
                </div>
            </div>
            <h3><?= $row['name'] ?></h3>
            <p class="price">₱<?= $row['price'] ?></p>
            <p class="description"> <?= $row['description'] ?> </p>
        </div>
        <?php endwhile; ?>
    </div>

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
    <script src="main2.js"></script>
</body>
</html>
