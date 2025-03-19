<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootz - Kids</title>
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
        <h2>Kids' Shoes</h2>
        
        <form action="search.php" method="get" class="search-form">
            <label for="search-name">Search by Name:</label>
            <input type="text" id="search-name" name="name" placeholder="Enter shoe name">
            <button type="submit">Search</button>
        </form>

        <div class="product-grid">
            <div class="product">
                <img src="images/kids1.jpg" alt="Kids Shoe 1">
                <h3>Colorful Sneakers</h3>
                <p>$49.99</p>
            </div>
            <div class="product">
                <img src="images/kids2.jpg" alt="Kids Shoe 2">
                <h3>Comfy Sandals</h3>
                <p>$39.99</p>
            </div>
            <div class="product">
                <img src="images/kids3.jpg" alt="Kids Shoe 3">
                <h3>Rain Boots</h3>
                <p>$59.99</p>
            </div>
            <div class="product">
                <img src="images/kids4.jpg" alt="Kids Shoe 4">
                <h3>School Shoes</h3>
                <p>$69.99</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Bootz. All rights reserved.</p>
    </footer>
</body>
</html>