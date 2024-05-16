<?php
// Replace these values with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create a connection
$conn = new mysqli($servername= "localhost", $username, $password, $dbname = "project");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Replace 'your_program_name' with the actual program name you want to display
$programName = 'BscInformatics';

// Fetch the number of students enrolled
$sqlEnrolled = "SELECT COUNT(*) as enrolled_count FROM records WHERE program = '$BscInformatics'";
$resultEnrolled = $conn->query($sqlEnrolled);
$rowEnrolled = $resultEnrolled->fetch_assoc();
$enrolledCount = $rowEnrolled['enrolled_count'];

// Fetch the number of students graduated
$sqlGraduated = "SELECT COUNT(*) as graduated_count FROM records WHERE program = '$BscInformatics' AND graduationYear = 2023";
$resultGraduated = $conn->query($sqlGraduated);
$rowGraduated = $resultGraduated->fetch_assoc();
$graduatedCount = $rowGraduated['graduated_count'];

// Calculate the graduation rate
if ($enrolledCount > 0) {
    $graduationRate = ($graduatedCount / $enrolledCount) * 100;
} else {
    $graduationRate = 0;
}

// Display the result on the dashboard
echo "Program: $BscInformatics <br>";
echo "Enrolled Students: $enrolledCount <br>";
echo "Graduated Students: $graduatedCount <br>";
echo "Graduation Rate: " . number_format($graduationRate, 2) . "%";

// Close the connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Graduation Analysis Dashboard</title>
  <style>
    .dashboard {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
    }
    .card {
      margin-bottom: 10px;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <div class="dashboard">
    <h1><?php echo $BscInformatics; ?> Graduation Analysis</h1>
    <div class="card">
      <p><b>Enrolled Students:</b> <?php echo $enrolled_data["enrolled_count"]; ?></p>
    </div>
    <div class="card">
      <p><b>Graduated Students:</b> <?php echo $graduated_data["graduated_count"]; ?></p>
    </div>
    <div class="card">
      <p><b>Graduation Rate:</b> <?php echo number_format($graduation_rate, 2) . "%"; ?></p>
    </div>
  </div>
</body>
</html>
