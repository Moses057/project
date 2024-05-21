<?php
// Database connection parameters
$servername = "localhost"; // Change this to your MySQL server hostname
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "project"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli('localhost', 'root', '', 'project');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $school = $conn->real_escape_string($_POST['school']);
    $programId = $conn->real_escape_string($_POST['programId']);
    $intakeYear = $conn->real_escape_string($_POST['intakeYear']);
    $enrolled_count = $conn->real_escape_string($_POST['enrolled_count']);
    $graduationYear = $conn->real_escape_string($_POST['graduationYear']);
    $graduated_count = $conn->real_escape_string($_POST['graduated_count']);

    // Insert data into MySQL database
    $sql = "INSERT INTO records (school, programId, intakeYear, enrolled_count, graduationYear, graduated_count) 
            VALUES ('$school', '$programId', '$intakeYear', '$enrolled_count', '$graduationYear', '$graduated_count')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
     header("Location: ../admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
