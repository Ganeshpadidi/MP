<?php
// Include your database configuration here or include a separate file
require_once('dbconfig.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the item_id to be deleted
    $itemID = $_POST["item_id"];

    // SQL query to delete inventory type from the addinventory table
    $sql = "DELETE FROM addinventory WHERE item_id = ?";

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Error: " . $conn->error);
    }

    // Bind parameters to the prepared statement
    $stmt->bind_param("s", $itemID);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Inventory type deleted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection when done
$conn->close();
?>
