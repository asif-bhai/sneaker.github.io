<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.html");
    exit;
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-container">
            <img src="logo.jpg" alt="Logo" class="logo">
            <nav>
                <ul>
                    <li><a href="dashboard.php">Home</a></li>
                    <li><a href="support.php">Support</a></li>
                    <li><a href="track-order.php">Track Your Order</a></li>
                    <li>Welcome, <?php echo htmlspecialchars($user['username']); ?>!</li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <h1>Welcome to Sneaker Sanctuary, <?php echo htmlspecialchars($user['username']); ?>!</h1>
       <!-- Banner -->
       <div class="banner">
        <img src="dash1.jpg" alt="Winter is Here Banner" class="banner-image">
    </div>

    <!-- Sections -->
    <div class="section most-hyped">
        <h2>Most Hyped:</h2>
        <div class="product-grid">
            <div class="product">
                <img src="1.jpg" alt="Nike Jordan 1" class="product-image">
                <p>Nike Jordan 1 (Men)</p>
                <p>$200.00</p>
            </div>
            <div class="product">
                <img src="2.jpg" alt="Adidas Gazelle" class="product-image">
                <p>Adidas Gazelle (Unisex)</p>
                <p>$125.00</p>
            </div>
            <div class="product">
                <img src="3.png" alt="Nike Alphafly" class="product-image">
                <p>Nike Alphafly (Women)</p>
                <p>$250.00</p>
            </div>
        </div>
    </div>

    <div class="section best-deals">
        <h2>Best Deals:</h2>
        <div class="product-grid">
            <div class="product">
                <img src="4.png" alt="Nike Air" class="product-image">
                <p>Nike Air (Men)</p>
                <p>$150.00</p>
            </div>
            <div class="product">
                <img src="5.png" alt="Air Jordan 1 Low" class="product-image">
                <p>Air Jordan 1 Low (Men)</p>
                <p>$120.00</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Delivery Info</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Size Guide</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Connect</h3>
                <ul class="social-links">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Twitter</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Payment</h3>
                <img src="placeholder-payment.png" alt="Payment Methods" class="payment-icons">
            </div>
        </div>
    </footer>
</body>
</html>
