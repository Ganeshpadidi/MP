<!DOCTYPE html>
<html>
<head>
    <title>Update Admin Details</title>
</head>
<body>
    <h2>Update Admin Details</h2>

    <?php
    // Include your database configuration here or include a separate file
    require_once('dbconfig.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $adminId = $_POST["admin_id"]; // Hidden input field to store admin ID
        $newPassword = $_POST["new_password"];

        // Hash the new password before updating it in the database
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        // SQL query to update the admin's password
        $updateQuery = "UPDATE admins SET password = ? WHERE id = ?";

        // Prepare and execute the SQL statement
        $stmt = $conn->prepare($updateQuery);
        if ($stmt === false) {
            die("Error: " . $conn->error);
        }

        // Bind parameters to the prepared statement
        $stmt->bind_param("si", $hashedPassword, $adminId);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Admin details updated successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    }

    // Close the database connection
    $conn->close();
    ?>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input type="hidden" name="admin_id" value="<?php echo $_SESSION["admin_id"]; ?>">
        <label for="new_password">New Password:</label>
        <input type="password" name="new_password" required><br><br>

        <input type="submit" value="Update Password">
    </form>
</body>
</html>
