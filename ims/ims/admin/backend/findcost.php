<?php
// Include your database configuration here or include a separate file
require_once('dbconfig.php');

// Initialize variables to store user input
$fromDate = $_POST['from_date'];
$toDate = $_POST['to_date'];
$dept = $_POST['dept'];
$type = $_POST['type'];
$demolish = $_POST['demolish'];

// Initialize the WHERE clause for the SQL query
$whereClause = "1"; // Default: Select all records

// Construct the WHERE clause based on user input
if (!empty($fromDate) && !empty($toDate)) {
    $whereClause .= " AND date BETWEEN '$fromDate' AND '$toDate'";
}

if (!empty($dept)) {
    $whereClause .= " AND dept = '$dept'";
}

if (!empty($type)) {
    $whereClause .= " AND type = '$type'";
}

// Adjust the WHERE clause for the "demolish" attribute
if ($demolish === 'Yes' || $demolish === 'none') {
    $whereClause .= " AND demolish = '$demolish'";
} // No need to add a condition for 'all', as it includes both demolished and not demolished items

// SQL query to calculate the total cost based on the criteria
$sql = "SELECT SUM(price) AS total_cost FROM inventoryinfo WHERE $whereClause";

$result = $conn->query($sql);

if ($result === false) {
    die("Error: " . $conn->error);
}

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalCost = $row['total_cost'];

    echo "Total Cost of Inventory: Rs." . number_format($totalCost, 2);
} else {
    echo "No matching records found.";
}

// Close the database connection
$conn->close();
?>
