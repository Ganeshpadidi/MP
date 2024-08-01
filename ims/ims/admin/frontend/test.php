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
    
