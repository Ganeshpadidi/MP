<?php
// Start or resume the session
session_start();

// Check if the user is logged in
if (isset($_SESSION["admin_id"])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page (or any other desired location)
    header("Location: login.php");
    exit();
} else {
    // If the user is not logged in, you can redirect them to the login page as well
    header("Location: login.php");
    exit();
}
?>
