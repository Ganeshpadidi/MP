<?php
// Include your database configuration here or include a separate file
require_once('dbconfig.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from the registration form
    $adminID = $_POST["admin_id"];
    $adminPassword = $_POST["admin_password"];

    // SQL query to insert admin data into the register table (without hashing)
    $sql = "INSERT INTO register (id, password) VALUES (?, ?)";

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Error: " . $conn->error);
    }

    // Bind parameters to the prepared statement
    $stmt->bind_param("ss", $adminID, $adminPassword);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Admin registration successful!";
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
    <title>Admin Registration</title>
</head>
<body>
    <h2>Admin Registration</h2>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="admin_id">Admin ID:</label>
        <input type="text" name="admin_id" required><br><br>

        <label for="admin_password">Password:</label>
        <input type="password" name="admin_password" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
