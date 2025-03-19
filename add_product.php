<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $category = $_POST['category'];

    $sql = "INSERT INTO products (name, price, image, category) VALUES ('$name', '$price', '$image', '$category')";

    if ($conn->query($sql) === TRUE) {
        echo "New product added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<form method="post">
    <input type="text" name="name" placeholder="Product Name" required><br>
    <input type="number" name="price" placeholder="Price" required><br>
    <input type="text" name="image" placeholder="Image Path (e.g. images/product.jpg)" required><br>
    <select name="category">
        <option value="men">Men</option>
        <option value="women">Women</option>
        <option value="kids">Kids</option>
    </select><br>
    <button type="submit">Add Product</button>
</form>
