<?php

// Replace these with your actual credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = mysqli_connect($host = "localhost", $username, $password, $dbname = "project");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


// Get form data (replace "name" and "email" with your actual input names)
$school = $_POST["school"];
$programId = $_POST["programId"];
$enrolledStudents = $_POST["enrolledStudents"];
$intakeYear = $_POST["intakeYear"];
$graduationYear = $_POST["graduationYear"];
$graduatedStudents = $_POST["graduatedStudents"];

// Sanitize data to prevent SQL injection (not shown in this example, but crucial for security)


// Prepare SQL statement (replace "your_table_name" and "column_names" with yours)
$sql = "INSERT INTO records (school, programId, enrolledStudents, intakeYear, graduationYear, graduatedStudents)
 VALUES (?, ?, ?, ?, ?, ?)";

// Prepare statement
$stmt = mysqli_prepare($conn, $sql);

// Bind parameters (prevents SQL injection)
mysqli_stmt_bind_param($stmt, "ssiiii", $school, $programId, $enrolledStudents, $intakeYear, $graduationYear, $graduatedStudents);

// Execute statement
if (mysqli_stmt_execute($stmt)) {
  echo "New record inserted successfully!";
 // header("Location: ../test.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);