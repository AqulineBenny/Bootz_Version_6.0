<?php
$products = [
    ['name' => 'Elegant Heels', 'price' => '$79.99', 'image' => 'images/women1.jpg', 'category' => 'women'],
    ['name' => 'Casual Flats', 'price' => '$59.99', 'image' => 'images/women2.jpg', 'category' => 'women'],
    ['name' => 'Running Shoes', 'price' => '$89.99', 'image' => 'images/women3.jpg', 'category' => 'women'],
    ['name' => 'Winter Boots', 'price' => '$99.99', 'image' => 'images/women4.jpg', 'category' => 'women'],
    ['name' => 'Classic Loafers', 'price' => '$89.99', 'image' => 'images/men1.jpg', 'category' => 'men'],
    ['name' => 'Sporty Sneakers', 'price' => '$99.99', 'image' => 'images/men2.jpg', 'category' => 'men'],
    ['name' => 'Hiking Boots', 'price' => '$109.99', 'image' => 'images/men3.jpg', 'category' => 'men'],
    ['name' => 'Formal Oxfords', 'price' => '$119.99', 'image' => 'images/men4.jpg', 'category' => 'men'],
    ['name' => 'Colorful Sneakers', 'price' => '$49.99', 'image' => 'images/kids1.jpg', 'category' => 'kids'],
    ['name' => 'Comfy Sandals', 'price' => '$39.99', 'image' => 'images/kids2.jpg', 'category' => 'kids'],
    ['name' => 'Rain Boots', 'price' => '$59.99', 'image' => 'images/kids3.jpg', 'category' => 'kids'],
    ['name' => 'School Shoes', 'price' => '$69.99', 'image' => 'images/kids4.jpg', 'category' => 'kids'],
];

$searchName = $_GET['name'] ?? '';

$filteredProducts = array_filter($products, function($product) use ($searchName) {
    return stripos($product['name'], $searchName) !== false;
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootz - Search Results</title>
    <link rel="stylesheet" href="css/styles.css">
     <link rel="stylesheet" href="css/search.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Bootz</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="women.php">Women</a></li>
                <li><a href="men.php">Men</a></li>
                <li><a href="kids.php">Kids</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <section class="products">
        <h2>Search Results</h2>
        <div class="product-grid">
            <?php if (empty($filteredProducts)): ?>
                <p>No products found.</p>
            <?php else: ?>
                <?php foreach ($filteredProducts as $product): ?>
                    <div class="product">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                        <h3><?php echo $product['name']; ?></h3>
                        <p><?php echo $product['price']; ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Bootz. All rights reserved.</p>
    </footer>
</body>
</html>