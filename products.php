<?php
include 'db_connection.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='product'>";
        echo "<img src='" . $row["image"] . "' alt='" . $row["name"] . "'>";
        echo "<h3>" . $row["name"] . "</h3>";
        echo "<p>$" . $row["price"] . "</p>";
        echo "<a href='edit_product.php?id=" . $row["id"] . "'>Edit</a> | ";
        echo "<a href='delete_product.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure?\")'>Delete</a>";
        echo "</div>";
    }
} else {
    echo "No products found!";
}
?>
