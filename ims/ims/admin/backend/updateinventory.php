<?php
// Include your database configuration here or include a separate file
require_once('dbconfig.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from the form
    $itemID = $_POST["item_id"];
    $itemType = $_POST["type"];
    $dept = $_POST["dept"];
    $price = $_POST["price"];
    $date = $_POST["date"];
    
    // SQL query to update inventory information in the inventoryinfo table
    $updateQuery = "UPDATE inventoryinfo SET type = ?, dept = ?, price = ?, date = ? WHERE item_id = ?";
    
    // Prepare and execute the SQL statement
    $stmt = $conn->prepare($updateQuery);
    if ($stmt === false) {
        die("Error: " . $conn->error);
    }
    
    // Bind parameters to the prepared statement
    $stmt->bind_param("sssss", $itemType, $dept, $price, $date, $itemID);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "Inventory information updated successfully!";
    } else {
        echo "Error updating inventory information: " . $stmt->error;
    }
    
    // Close the statement
    $stmt->close();
}
?>
