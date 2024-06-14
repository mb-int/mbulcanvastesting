<?php
// Handle LTI launch
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate LTI launch (implement appropriate validation)

    // Retrieve user information if needed
    $user_full_name = $_POST['lis_person_name_full'] ?? 'User';
} else {
    die('LTI launch request not detected.');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LTI App with Custom CSS</title>
    <link rel="stylesheet" href="custom.css">
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo htmlspecialchars($user_full_name); ?>!</h1>
        <p>This is your LTI 1.1 app with custom CSS loaded.</p>
    </div>
</body>
</html>
