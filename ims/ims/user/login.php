<?php
session_start(); // Start a PHP session for user authentication
require_once('C:\xampp\htdocs\ims\admin\dbconfig.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from the login form
    $adminID = $_POST["user_id"];
    $adminPassword = $_POST["admin_password"];

    // SQL query to retrieve the password for the given admin ID
    $sql = "SELECT id, password FROM users WHERE id = ?";

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
                echo 'welcome admin';
                header("Location: index.php"); // Redirect to a dashboard or home page
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

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <h2>Admin Login</h2>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="admin_id">Admin ID:</label>
        <input type="text" name="user_id" required><br><br>

        <label for="admin_password">Password:</label>
        <input type="password" name="admin_password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
