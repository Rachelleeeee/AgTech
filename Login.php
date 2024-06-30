<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/login_register.css">
</head>
<body>
    <div class="back-button-container">
        <a href="#" class="back-button">&larr; Back</a>
    </div>
    <div class="login-container">
        <form class="login-form" action="#" method="POST">
            <div class="logo-container">
                <img src="images/AgTech Logo.png" alt="AgTech Logo" class="logo">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <a href="#" class="forgot-password">Forgot Password?</a>
            </div>
            <button type="submit">Login</button>
            <p>Don't have an account? <a href="Register.php" class="register-link">Register</a></p>
        </form>
    </div>
</body>
</html>