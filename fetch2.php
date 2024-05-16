<!DOCTYPE html>
<html>
<head>
    <title>School Data with Graduation Rate</title>
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

<h2>School Data with Graduation Rate</h2>

<form method="post">
    <label for="programId">Select Program ID:</label>
    <select id="programId" name="programId">
        <option value="informatics">Informatics</option>
        <option value="Hri">Hri</option>
        <option value="BCJ">BCJ</option>
        <option value="INS">INS</option>
        <!-- Add more options as needed -->
    </select>
    <button type="submit">Submit</button>
</form>

<table>
    <tr>
        <th>Program ID</th>
        <th>Intake Year</th>
        <th>Enrolled Count</th>
        <th>Graduation Year</th>
        <th>Graduated Count</th>
        <th>Graduation Rate (%)</th>
    </tr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get selected programId
    $selected_programId = $_POST["programId"];

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

    // SQL query to fetch data for the selected programId
    $sql = "SELECT programId, intakeYear, enrolled_count, graduationYear, graduated_count FROM records WHERE programId='$selected_programId'";
    $result = $conn->query($sql);

    // Check if any rows returned
    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            $enrolled_count = $row["enrolled_count"];
            $graduated_count = $row["graduated_count"];
            $graduation_rate = ($graduated_count / $enrolled_count) * 100;

            echo "<tr><td>" . $row["programId"] . "</td><td>" . $row["intakeYear"] . "</td><td>" . $enrolled_count . "</td><td>" . $row["graduationYear"] . "</td><td>" . $graduated_count . "</td><td>" . number_format($graduation_rate, 2) . "%</td></tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No results found for selected program ID.</td></tr>";
    }

    $conn->close();
}
?>

</table>

</body>
</html>
