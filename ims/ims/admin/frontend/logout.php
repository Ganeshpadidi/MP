<?php
session_start(); // Start the session

// Check if the user is logged in (has an active session)
if (isset($_SESSION["admin_id"])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();
}

// Redirect the user to the login page or any other desired location
header("Location: login.php"); // You can change the URL to the desired destination
exit();
?>
