<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <a href="index.html"><img src="images/Rongo University logo.png"></a>
    <section>
        <div class="wrapper">
            <div class="form-box">
                <h2>Log In</h2>
              <form action="includes/log_in.php" method="POST">
                </div>
                    <div class="input-box">
                        <label for="username">username</label><br>
                        <input type="username" name="username"><br> 
                    </div><br>
                    <div class="input-box">
                        <label for="password">password</label><br>
                        <input type="password" name="password" required><br>
                    </div><br>
                    <div class="input-box">
                        <label for="email">email address</label><br>
                        <input type="email" name="email" required><br>
                    </div><br>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <a href="">Forgot Password?</a>
                    </div><br>
                </div>
                <button type="submit" class="btn">Login</button><br>
                <div class="login-register">
                    <p>Don't have an account? <a href="signup.php" class="register-link">Register</a></p>
                </div>
            
            </div>
            
    </form>
    </section>
</body>
</html>