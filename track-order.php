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
    <title>Track Your Order - Sneaker Sanctuary</title>
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

    <!-- Track Order Section -->
    <div class="section track-order">
        <h2>Track Your Order</h2>
        
        <p>Enter your order ID below to track the status of your order:</p>

        <!-- Track Order Form -->
        <div class="track-order-form">
            <form action="track-order-result.php" method="GET">
                <input type="text" name="order_id" placeholder="Enter Order ID" required>
                <button type="submit">Track Order</button>
            </form>
        </div>

        <!-- Order Status (Placeholder) -->
        <div class="order-status">
            <h3>Order Status</h3>
            <p><strong>Order ID:</strong> #123456</p>
            <p><strong>Status:</strong> Shipped</p>
            <p><strong>Estimated Delivery:</strong> January 15, 2025</p>
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

