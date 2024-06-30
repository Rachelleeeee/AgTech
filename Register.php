<?php
// Assuming you have session_start() at the beginning if you're using sessions
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    // Redirect to Verify_email.php if email is provided
    if (empty($email)) {
        header("Location: Verify_email.php");
        exit();
    } else {
        header("Location: Verify_email.php?email=" . urlencode($email));
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/login_register.css">
    <script src="js/register.js" defer></script>
</head>
<body>
    <div class="back-button-container">
        <a href="#" class="back-button">&larr; Back</a>
    </div>
    <div class="registration-container">
        <h2 class="registration-header">REGISTER</h2>
        <form class="registration-form" action="#" method="POST">
            <div class="form-row">
                <div class="form-column">
                    <div class="form-group">
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" name="first-name" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Username</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="province">Province</label>
                        <input type="text" id="province" name="province" required class="fade-input">
                    </div>
                    <div class="form-group">
                        <label for="barangay">Barangay</label>
                        <input id="barangay" name="barangay" required>
                    </div>
                    <div class="form-group">
                        <label for="phone-number">Phone Number</label>
                        <input type="tel" id="phone-number" name="phone-number" required>
                    </div>
                </div>
                <div class="form-column">
                    <div class="form-group">
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" name="last-name" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Password</label>
                        <input type="password" id="confirm-password" name="confirm-password" required>
                    </div>
                    <div class="form-group">
                        <label for="municipality">Municipality</label>
                        <select id="municipality" name="municipality" required>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="postal-code">Postal Code</label>
                        <input type="text" id="postal-code" name="postal-code" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email (Optional)</label>
                        <input type="email" id="email" name="email">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>User Type</label>
                <div class="user-type-options">
                    <input type="radio" id="farmer" name="user-type" value="farmer" required>
                    <label for="farmer">Farmer</label>
                    <input type="radio" id="trader" name="user-type" value="trader" required>
                    <label for="trader">Trader</label>
                </div>
            </div>
            <button type="submit">SUBMIT</button>
            <p>Already have an account? <a href="Login.php" class="login-link">Login</a></p>
        </form>
    </div>
</body>
</html>
