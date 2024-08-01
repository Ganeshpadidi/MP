<?php
// Include your database configuration here or include a separate file
require_once('dbconfig.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve item_id from the form
    $itemID = $_POST["item_id"];

    // Update demolish attribute to 'Yes' for the specific item_id
    $updateQuery = "UPDATE inventoryinfo SET demolish = 'Yes' WHERE item_id = ?";
    $updateStmt = $conn->prepare($updateQuery);

    // Check if the statement is prepared successfully
    if ($updateStmt === false) {
        die("Error: " . $conn->error);
    }

    // Bind parameters to the prepared statement
    $updateStmt->bind_param("s", $itemID);

    // Execute the statement
    if ($updateStmt->execute()) {
        echo "Demolish attribute updated to 'Yes' for item_id: $itemID";
    } else {
        echo "Error: " . $updateStmt->error;
    }

    // Close the statement
    $updateStmt->close();
}
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Form</title>
</head>
<body>
    <form method="POST" action="update_demolish.php">
        <label for="item_id">Item ID:</label>
        <input type="text" id="item_id" name="item_id" required>
        <button type="submit">Update Demolish Attribute</button>
    </form>
</body>
</html>
