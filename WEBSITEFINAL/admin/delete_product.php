<?php
include 'db.php';
checkLogin();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT image FROM products WHERE id=$id");
    $product = $result->fetch_assoc();
    $imagePath = "../images/" . $product['image'];

    if (file_exists($imagePath)) {
        unlink($imagePath);
    }

    $conn->query("DELETE FROM products WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete Product</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Product Deleted</h2>
    <p>The product has been successfully deleted.</p>
    <a href="index.php">Go back to Admin Panel</a>
</body>
</html>