<!DOCTYPE html>
<html>
<head>
    <title>School of Education Data with Graduation Rate</title>
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
        canvas {
            margin-top: 20px;
        }
        .p1{
            font-size: 30px;
        }
    </style>
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<h2>School Data with Graduation Rate</h2>

<form method="post">
    <div class="p1">
    <label for="programId">Select Program ID:</label>
    <select id="programId" name="programId">
        <option value="EDS">EDS</option>
        <option value="EDA">EDA</option>
        <option value="SNE">SNE</option>
        <!-- Add more options as needed -->
    </select>
    <button type="submit">Submit</button>
    </div>
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

<!-- Bar chart canvas -->
<canvas id="graduationChart" width="200" height="100"></canvas>

<script>
// JavaScript to generate bar chart using Chart.js
document.addEventListener('DOMContentLoaded', function() {
    // Get PHP variables for graduation years and rates
    <?php
    // Assuming $graduationYears and $graduationRates are arrays containing respective values
    // You need to fetch these values from your database
    $graduationYears = array(2020, 2021, 2022, 2023); // Example graduation years
    $graduationRates = array(80, 85, 75, 90); // Example graduation rates
    ?>
    
    // Initialize bar chart data
    var ctx = document.getElementById('graduationChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($graduationYears); ?>,
            datasets: [{
                label: 'Graduation Rate (%)',
                data: <?php echo json_encode($graduationRates); ?>,
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
});
</script>

</body>
</html>