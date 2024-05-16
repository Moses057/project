<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Records</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<a href="index.php"><img src="Rongo University logo.png"></a>
  
<section class = "wrapper">
      <div class="form-box">
        <h2>Enrollment Records</h2>
        <form action="conn.php" method="POST">

          <div class="input-box">
          <label for="school">School</label><br>
            <input type="text" name="school" required><br>
          </div><br>

          <div class="input-box">
          <label for="programId">Program Name</label><br>
            <input type="text" name="programId" required><br>
          </div><br>

          <div class="input-box">
          <label for="intakeYear">Intake year</label><br>
            <input type="year" name="intakeYear" required><br>
          </div><br>

          <div class="iput-box">
          <label for="enrolled_count">Number of Enrolled Students</label><br>
            <input type="integer" name="enrolled_count" required><br>
          </div><br>

          <div class="iput-box">
          <label for="graduationYear">Graduation Year</label><br>
            <input type="year" name="graduationYear" required><br>
          </div><br>

          <div class="iput-box">
          <label for="graduated_count">Number of Students Graduated </label><br>
            <input type="integer" name="graduated_count" required><br>
          </div><br>
        
          <button type="submit" class="btn">Submit</button><br>
          
        </div>
      </div>
      </form>
    </section>
    <p id = "demo"></p>
  
    
</body>
</html>