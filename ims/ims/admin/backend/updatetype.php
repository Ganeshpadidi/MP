<?php
// Include your database configuration here or include a separate file
require_once('dbconfig.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from the form
    $itemID = $_POST["item_id"];
    $itemType = $_POST["item_type"];

    // SQL query to check if the item ID exists
    $checkQuery = "SELECT * FROM addinventory WHERE item_id = ?";
    $checkStmt = $conn->prepare($checkQuery);

    if ($checkStmt === false) {
        die("Error: " . $conn->error);
    }

    // Bind parameters to the prepared statement
    $checkStmt->bind_param("s", $itemID);

    // Execute the statement
    $checkStmt->execute();

    // Store the result
    $checkStmt->store_result();

    // Check if a row exists
    if ($checkStmt->num_rows > 0) {
        // Item ID exists, proceed with the update

        // SQL query to update inventory type in the addinventory table
        $updateQuery = "UPDATE addinventory SET type = ? WHERE item_id = ?";
        $updateStmt = $conn->prepare($updateQuery);

        if ($updateStmt === false) {
            die("Error: " . $conn->error);
        }

        // Bind parameters to the prepared statement
        $updateStmt->bind_param("ss", $itemType, $itemID);

        // Execute the update statement
        if ($updateStmt->execute()) {
            echo "Inventory type updated successfully!";
        } else {
            echo "Error updating inventory type: " . $updateStmt->error;
        }

        // Close the update statement
        $updateStmt->close();
    } else {
        echo "No item with such ID found.";
    }

    // Close the check statement
    $checkStmt->close();
}

// Close the database connection when done
$conn->close();
?>
