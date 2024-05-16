<!DOCTYPE html>
<html>
<head>
    <title>School Data</title>
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
    </style>
</head>
<body>

<h2>School Data</h2>

<table>
    <tr>
        <th>School</th>
        <th>Program ID</th>
        <th>Intake Year</th>
        <th>Enrolled Count</th>
        <th>Graduation Year</th>
        <th>Graduated Count</th>
    </tr>

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
