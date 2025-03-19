<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootz - Men</title>
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
        <h2>Men's Shoes</h2>
        
        <!-- Search Form -->
        <form action="search.php" method="get" class="search-form">
            <label for="search-name">Search by Name:</label>
            <input type="text" id="search-name" name="name" placeholder="Enter shoe name">
            <button type="submit">Search</button>
        </form>

        <div class="product-grid">
            <div class="product">
                <img src="images/men1.jpg" alt="Men Shoe 1">
                <h3>Classic Loafers</h3>
                <p>$89.99</p>
            </div>
            <div class="product">
                <img src="images/men2.jpg" alt="Men Shoe 2">
                <h3>Sporty Sneakers</h3>
                <p>$99.99</p>
            </div>
            <div class="product">
                <img src="images/men3.jpg" alt="Men Shoe 3">
                <h3>Hiking Boots</h3>
                <p>$109.99</p>
            </div>
            <div class="product">
                <img src="images/men4.jpg" alt="Men Shoe 4">
                <h3>Formal Oxfords</h3>
                <p>$119.99</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Bootz. All rights reserved.</p>
    </footer>
</body>
</html>