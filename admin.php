<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        form {
            margin-bottom: 20px;
            font-weight: 200;
        }
    </style>
</head>
<body>

<h2>Admin Page</h2>
<div class="form">
<!-- Form to add new school data -->
<form method="post" action="includes/conn.php">
    <h3>Add New School Data</h3>
    <label for="school">School:</label>
    <input type="text" id="school" name="school" required><br>
    <label for="programId">Program ID:</label>
    <input type="text" id="programId" name="programId" required><br>
    <label for="intakeYear">Intake Year:</label>
    <input type="text" id="intakeYear" name="intakeYear" required><br>
    <label for="enrolled_count">Enrolled Count:</label>
    <input type="number" id="enrolled_count" name="enrolled_count" required><br>
    <label for="graduationYear">Graduation Year:</label>
    <input type="text" id="graduationYear" name="graduationYear" required><br>
    <label for="graduated_count">Graduated Count:</label>
    <input type="number" id="graduated_count" name="graduated_count" required><br>
    <button type="submit">Add Data</button>
</form>
    </div>

<!-- Table to display existing school data -->
<h3>Existing School Data</h3>
<table>
    <tr>
        <th>School</th>
        <th>Program ID</th>
        <th>Intake Year</th>
        <th>Enrolled Count</th>
        <th>Graduation Year</th>
        <th>Graduated Count</th>
    </tr>
    <!-- PHP code to fetch and display existing data from database -->
    
<?php
// MySQL database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli('localhost', 'root', '', 'project');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data
$sql = "SELECT school, programId, intakeYear, enrolled_count, graduationYear, graduated_count FROM records";
$result = $conn->query($sql);

// Check if any rows returned
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["school"] . "</td><td>" . $row["programId"] . "</td><td>" . $row["intakeYear"] . "</td><td>" . $row["enrolled_count"] . "</td><td>" . $row["graduationYear"] . "</td><td>" . $row["graduated_count"] . "</td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
</table>

</body>
</html>
