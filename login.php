<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "your_password";
$dbname = "login data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from POST request
$user = $_POST['username'];
$pass = $_POST['password'];

// SQL query to check if the user exists
$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User found
    echo "Login successful!";
} else {
    // User not found
    echo "Invalid username or password.";
}

// Close connection
$conn->close();
?>