<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $enteredOtp = implode('', $_POST['otp']); // Assuming OTP input fields are named 'otp[]'

    if ($enteredOtp == $_SESSION['otp']) {
       
        echo "OTP verified successfully!";
        // Proceed with the registration or login process
    } else {
        
        echo "Invalid OTP. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link rel="stylesheet" href="css/login_register.css">
    <script src="js/verify.js"></script>
</head>
<body>
    <div class="back-button-container">
        <a href="#" class="back-button">&larr; Back</a>
    </div>
    <div class="verification-container">
        <h2 class="verification-header">VERIFICATION CODE</h2>
        <p>We sent a code to your phone number. This helps keep your account safe.</p>
        <form class="verification-form" action="verify.php" method="POST">
            <div class="otp-inputs">
                <input type="text" name="otp[]" maxlength="1" class="otp-input" required>
                <input type="text" name="otp[]" maxlength="1" class="otp-input" required>
                <input type="text" name="otp[]" maxlength="1" class="otp-input" required>
                <input type="text" name="otp[]" maxlength="1" class="otp-input" required>
            </div>
            <button type="submit">Verify</button>
            <p><a href="OtpPN.php" class="resend-link">Didn't receive a code? Resend</a></p>
            <p><a href="Verify_email.php" class="use-email-link">Use my email instead</a></p>
        </form>
    </div>
</body>
</html>
