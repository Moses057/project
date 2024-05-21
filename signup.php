<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<a href="index.php"><img src="images/Rongo University logo.png"></a>
  
    <section class = "wrapper">
      <div class="form-box">
        <h2>Sign Up</h2>
        <form action="includes/connect_form.php" method="POST">

          <div class="input-box">
            <label for="username">username</label><br>
            <input type="username" name="username" required><br>
          </div><br>

          <div class="input-box">
            <label for="password_1">password</label><br>
            <input type="password" name="password_1" required><br>
          </div><br>
          <div class="input-box">
            <label for="password_2">confirm password</label><br>
            <input type="password" name="password_2" required><br>
          </div><br>
          <div class="iput-box">
            <label for="email">email address</label><br>
            <input type="email" name="email" required><br>
          </div><br>
          <div class="remember-forgot">
            <label><input type="checkbox">Agree terms and condtions</label>
          </div>
        
          <button type="submit" class="btn">Register</button><br>
          <div class="login-register">
            <p>Already have an account? <a href="signin.php" class="login-link">Login</a></p>
        </div>
      </div>
      </form>
    </section>
    <p id = "demo"></p>
  
    
</body>
</html>