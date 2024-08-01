<?php
session_start();

// Check if the user is authenticated
$authenticated = isset($_SESSION["admin_id"]);

// Return the authentication status as JSON
echo json_encode(['authenticated' => $authenticated]);
?>
