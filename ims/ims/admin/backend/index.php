<?php
// Start or resume the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION["admin_id"])) {
    // If the user is not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}

// If the user is logged in, you can retrieve their admin ID or other session data here
$adminID = $_SESSION["admin_id"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $adminID; ?>!</h2>
    
    <!-- Logout Form -->
    <form method="POST" action="logout.php">
        <input type="submit" value="Logout">
    </form>
</body>
</html>
