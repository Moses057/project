<?php
// Database connection parameters
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'project';

// Create a database connection
$conn = new mysqli($host = 'localhost', $username, $password, $dbname = 'project');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize user input
function sanitizeInput($input) {
    // Use appropriate sanitization techniques based on your requirements
    return htmlspecialchars(trim($input));
}

// Function to hash the password (you should use a stronger hashing algorithm in production)
function hashPassword($password) {
    return md5($password);
}

// Get user inputs
$email = sanitizeInput($_POST['email']);
$username = sanitizeInput($_POST['username']);
$password = hashPassword($_POST['password']);

// Query to check user credentials
$query = "SELECT * FROM user WHERE email = '$email' AND username = '$username' AND password_1 = '$password'";
$result = $conn->query($query);

// Check if the query was successful
if ($result) {
    // Check if a matching user was found
    if ($result->num_rows > 0) {
        // Authentication successful
        echo "Login successful. Welcome, $username!";
        header("Location: ../content.php");
    } else {
        // Authentication failed
        echo "Invalid credentials. Please try again.";
        header("Location: ../content.php");
    }
} else {
    // Query execution failed
    echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close();
?>