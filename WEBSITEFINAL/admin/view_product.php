<?php
include 'config.php';
checkLogin();

$category = 'men';
$products = mysqli_query($conn, "SELECT * FROM shoes WHERE category='$category'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2><?= ucfirst($category) ?>'s Shoes</h2>
    <div class="products">
        <?php while ($row = mysqli_fetch_assoc($products)) { ?>
            <div class="product">
                <img src="<?= $row['image'] ?>" alt="<?= $row['name'] ?>">
                <h3><?= $row['name'] ?></h3>
                <p class="price">₱<?= number_format($row['price'], 2) ?></p>
                <p class="description"> <?= $row['description'] ?> </p>
                <button onclick="addToCart('<?= $row['name'] ?>', <?= $row['price'] ?>)">Add to Cart</button>
            </div>
        <?php } ?>
    </div>
</body>
</html>