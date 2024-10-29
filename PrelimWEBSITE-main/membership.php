<?php
// Start the session to access session variables
session_start();

// Check if the user is logged in by checking the email passed from the login page
if (!isset($_GET['name']) || !isset($_GET['birthdate'])) {
    echo "Access denied. Please log in.";
    exit();
}

// Retrieve the user's name and birthdate from the URL parameters
$user_name = htmlspecialchars($_GET['name']);
$user_birthdate = htmlspecialchars($_GET['birthdate']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Page</title>
    <link rel="stylesheet" href="membership.css"> <!-- Link to separate CSS file -->
</head>
<body>
    <div class="app-bar">
        <a href="mainpage.html">
            <div><img src="assets/aid.png" alt="Logo"></div>
        </a>
        <nav>
            <button class="nav-btn new-button" onclick="window.location.href='../PrelimWEBSITE-main/donations.php';">Send Donations</button>
        </nav>
    </div>

    <div class="container">
        <h1>Welcome, <?php echo $user_name; ?>!</h1>
        <p>Your registered email is: <?php echo htmlspecialchars($_GET['email']); ?></p>
        <p>Your birthdate is: <?php echo $user_birthdate; ?></p>
    </div>
</body>
</html>