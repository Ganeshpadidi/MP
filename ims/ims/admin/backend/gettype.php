<?php
// Include your database configuration here or include a separate file
require_once('dbconfig.php');

$sql = "SELECT DISTINCT type FROM addinventory";
$result = $conn->query($sql);

$types = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $types[] = $row['type'];
    }
}

// Return the types as JSON
header('Content-Type: application/json');
echo json_encode($types);
?>
