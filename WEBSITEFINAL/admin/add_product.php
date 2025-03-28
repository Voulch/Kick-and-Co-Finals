<?php
include 'db.php';
checkLogin();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];

    move_uploaded_file($_FILES['image']['tmp_name'], "../images/$image");

    $conn->query("INSERT INTO products (name, category, price, description, image) 
                  VALUES ('$name', '$category', '$price', '$description', '$image')");
    
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h2>Add Product</h2>
        <form method="POST" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="category">Category:</label>
            <select id="category" name="category">
                <option value="men">Men</option>
                <option value="women">Women</option>
                <option value="clearance">Clearance</option>
            </select>
            
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" required>
            
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
            
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" required>
            
            <button type="submit">Add Product</button>
            <a href="index.php" class="button exit-button">Exit</a>
        </form>
    </div>
</body>
</html>