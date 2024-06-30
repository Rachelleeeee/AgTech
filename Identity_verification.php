<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identity Verification</title>
    <link rel="stylesheet" href="css/login_register.css">
</head>
<body>
    <div class="verification-container">
        <h2 class="verification-header">Identity Verification</h2>
        <form class="verification-form" action="submit_identity.php" method="POST" enctype="multipart/form-data">
            <label for="idType" class="semi-bold">Upload a Valid ID</label>
            <div class="id-options">
                <label><input type="radio" name="idType" value="passport" required> Passport</label>
                <label><input type="radio" name="idType" value="drivers_license"> Driver's License</label>
                <label><input type="radio" name="idType" value="voters_id"> Voter's ID</label>
                <label><input type="radio" name="idType" value="umd"> UMD</label>
                <label><input type="radio" name="idType" value="philhealth_id"> Philhealth ID</label>
                <label><input type="radio" name="idType" value="postal_id"> Postal ID</label>
                <label><input type="radio" name="idType" value="national_id"> National ID</label>
            </div>
            <div class="upload-section">
                <label for="idUpload" class="upload-label">
                    <span class="upload-icon">📤</span> 
                    <span class="upload-text">Upload here</span>
                </label>
                <input type="file" id="idUpload" name="idUpload" accept="image/*,application/pdf" required>
            </div>
            <button type="submit">SUBMIT</button>
        </form>
    </div>
</body>
</html>
