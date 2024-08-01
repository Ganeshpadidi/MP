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
    $serialnum = $_POST["serialnum"]; // Assuming this is coming from your form
    
    // SQL query to insert inventory information into the inventoryinfo table
    $insertQuery = "INSERT INTO inventoryinfo (item_id, type, dept, price, date, serialnum) VALUES (?, ?, ?, ?, ?, ?)";
    
    // Prepare and execute the SQL statement
    $stmt = $conn->prepare($insertQuery);
    if ($stmt === false) {
        die("Error: " . $conn->error);
    }
    
    // Bind parameters to the prepared statement
    $stmt->bind_param("ssssss", $itemID, $itemType, $dept, $price, $date, $serialnum);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "Inventory information added successfully!";
    } else {
        echo "Error adding information in database";
    }
    
    // Close the statement
    $stmt->close();
}
?>
