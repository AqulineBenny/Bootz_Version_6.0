<?php
include 'db_connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM products WHERE id=$id");
    $product = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $category = $_POST['category'];

    $conn->query("UPDATE products SET name='$name', price='$price', image='$image', category='$category' WHERE id=$id");
    echo "Product updated!";
}

?>
<form method="post">
    <input type="text" name="name" value="<?= $product['name'] ?>" required><br>
    <input type="number" name="price" value="<?= $product['price'] ?>" required><br>
    <input type="text" name="image" value="<?= $product['image'] ?>" required><br>
    <select name="category">
        <option value="men" <?= $product['category'] == 'men' ? 'selected' : '' ?>>Men</option>
        <option value="women" <?= $product['category'] == 'women' ? 'selected' : '' ?>>Women</option>
        <option value="kids" <?= $product['category'] == 'kids' ? 'selected' : '' ?>>Kids</option>
    </select><br>
    <button type="submit">Update Product</button>
</form>
