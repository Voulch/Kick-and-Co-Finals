<?php
include 'db.php';
checkLogin();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM products WHERE id=$id");
    $product = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "../images/$image");
        $conn->query("UPDATE products SET name='$name', category='$category', price='$price', description='$description', image='$image' WHERE id=$id");
    } else {
        $conn->query("UPDATE products SET name='$name', category='$category', price='$price', description='$description' WHERE id=$id");
    }

    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h2>Edit Product</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $product['id'] ?>">
            <label>Name:</label>
            <input type="text" name="name" value="<?= $product['name'] ?>" required>
            <label>Category:</label>
            <select name="category">
                <option value="men" <?= $product['category'] == 'men' ? 'selected' : '' ?>>Men</option>
                <option value="women" <?= $product['category'] == 'women' ? 'selected' : '' ?>>Women</option>
                <option value="clearance" <?= $product['category'] == 'clearance' ? 'selected' : '' ?>>Clearance</option>
            </select>
            <label>Price:</label>
            <input type="number" name="price" value="<?= $product['price'] ?>" required>
            <label>Description:</label>
            <textarea name="description" required><?= $product['description'] ?></textarea>
            <label>Current Image:</label>
            <img src="../images/<?= $product['image'] ?>" alt="Current Image">
            <label>New Image:</label>
            <input type="file" name="image">
            <button type="submit">Edit Product</button>
            <a href="index.php" class="button exit-button">Exit</a>
        </form>
    </div>
</body>
</html>