<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <link rel="stylesheet" href="css/login_register.css">
</head>
<body>
    <div class="back-button-container">
        <a href="#" class="back-button">&larr; Back</a>
    </div>
    <div class="verification-container">
        <h2 class="verification-header">OTP VERIFICATION</h2>
        <p>Enter your email to get a verification code.</p>
        <form class="verification-form" action="send_email_code.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <button type="submit">SEND CODE</button>
            <p><a href="OtpPN.php" class="use-phone-link">Use my phone number instead</a></p>
        </form>
    </div>
</body>
</html>
