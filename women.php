<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootz - Women</title>
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
        <h2>Women's Shoes</h2>
        
        <!-- Search Form -->
        <form action="search.php" method="get" class="search-form">
            <label for="search-name">Search by Name:</label>
            <input type="text" id="search-name" name="name" placeholder="Enter shoe name">
            <button type="submit">Search</button>
        </form>

        <div class="product-grid">
            <div class="product">
                <img src="images/women1.jpg" alt="Women Shoe 1">
                <h3>Elegant Heels</h3>
                <p>$79.99</p>
            </div>
            <div class="product">
                <img src="images/women2.jpg" alt="Women Shoe 2">
                <h3>Casual Flats</h3>
                <p>$59.99</p>
            </div>
            <div class="product">
                <img src="images/women3.jpg" alt="Women Shoe 3">
                <h3>Running Shoes</h3>
                <p>$89.99</p>
            </div>
            <div class="product">
                <img src="images/women4.jpg" alt="Women Shoe 4">
                <h3>Winter Boots</h3>
                <p>$99.99</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Bootz. All rights reserved.</p>
    </footer>
</body>
</html>