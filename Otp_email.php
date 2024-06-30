<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $enteredCode = implode('', $_POST['verification_code']); // Assuming verification code input fields are named 'verification_code[]'

    if ($enteredCode == $_SESSION['email_verification_code']) {
        // Code is correct
        echo "Email verified successfully!";
        // Proceed with the registration or login process
    } else {
        // Code is incorrect
        echo "Invalid verification code. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <link rel="stylesheet" href="css/login_register.css">
    <script src="js/verify_email.js"></script>
</head>
<body>
    <div class="back-button-container">
        <a href="#" class="back-button">&larr; Back</a>
    </div>
    <div class="verification-container">
        <h2 class="verification-header">VERIFICATION CODE</h2>
        <p>We sent a code to your email account. This helps keep your account safe.</p>
        <form class="verification-form" action="verify_email.php" method="POST">
            <div class="otp-inputs">
                <input type="text" name="verification_code[]" maxlength="1" class="otp-input" required>
                <input type="text" name="verification_code[]" maxlength="1" class="otp-input" required>
                <input type="text" name="verification_code[]" maxlength="1" class="otp-input" required>
                <input type="text" name="verification_code[]" maxlength="1" class="otp-input" required>
            </div>
            <button type="submit">Verify</button>
            <p><a href="Otp_email.php" class="resend-link">Didn't receive a code? Resend</a></p>
            <p><a href="OtpPN.php" class="use-phone-link">Use my phone number instead</a></p>
        </form>
    </div>
</body>
</html>
