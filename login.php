<?php
// Start session
session_start();

// Database connection
$conn = new mysqli('localhost', 'root', '', 'sneaker_sanctuary');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch user data from the database
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        $_SESSION['user'] = $user; // Store user data in session
        header("Location: dashboard.php");
    } else {
        echo "Invalid email or password. <a href='index.html'>Try again</a>";
    }

    $stmt->close();
    $conn->close();
}
?>
