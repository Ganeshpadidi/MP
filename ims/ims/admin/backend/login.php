<?php
session_start(); // Start a PHP session for user authentication
require_once('dbconfig.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from the login form
    $adminID = $_POST["admin_id"];
    $adminPassword = $_POST["admin_password"];

    // SQL query to retrieve the password for the given admin ID
    $sql = "SELECT id, password FROM register WHERE id = ?";

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Error: " . $conn->error);
    }

    // Bind parameters to the prepared statement
    $stmt->bind_param("s", $adminID);

    // Execute the statement
    if ($stmt->execute()) {
        $stmt->store_result();

        // Check if an admin with the given ID exists
        if ($stmt->num_rows === 1) {
            $stmt->bind_result($id, $storedPassword);
            $stmt->fetch();

            // Verify the password (without hashing)
            if ($adminPassword === $storedPassword) {
                // Password is correct, log in the user
                $_SESSION["admin_id"] = $id;
                
                // Return "authenticated" as a response
                echo "authenticated";
                exit();
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "Admin ID not found.";
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection when done
// $conn->close();
?>
