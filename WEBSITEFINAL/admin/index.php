<?php
include 'db.php';
checkLogin();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="admin-container">
        <h1 class="admin-header">Admin Panel</h1>
        <div class="action-buttons">
            <a href="add_product.php" class="button">Add Product</a>
            <a href="logout.php" class="button">Logout</a>
        </div>
        <h3 class="admin-subheader product-list-header">Product List</h3>
        <table class="full-width-table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            <?php
            $result = $conn->query("SELECT * FROM products");
            while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['category'] ?></td>
                <td>₱<?= $row['price'] ?></td>
                <td><?= $row['description'] ?></td>
                <td><img src="../images/<?= $row['image'] ?>" width="50"></td>
                <td>
                    <a href="edit_product.php?id=<?= $row['id'] ?>">Edit</a> |
                    <a href="delete_product.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>