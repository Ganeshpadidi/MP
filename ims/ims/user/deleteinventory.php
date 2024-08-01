<!DOCTYPE html>
<html>
<head>
    <title>Delete Inventory</title>
</head>
<body>
    <h2>Delete Inventory</h2>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="item_id">Item ID:</label>
        <input type="text" name="item_id" required>
        <input type="submit" value="Delete Item">
    </form>

    <?php
    require_once('dbconfig.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $itemID = $_POST["item_id"];

        $deleteSQL = "DELETE FROM inventoryinfo WHERE item_id = ?";
        
        $deleteStmt = $conn->prepare($deleteSQL);
        if ($deleteStmt === false) {
            die("Error: " . $conn->error);
        }

        $deleteStmt->bind_param("s", $itemID);

        if ($deleteStmt->execute()) {
            echo "Inventory item with Item ID: $itemID has been deleted successfully!";
        } else {
            echo "Error deleting inventory item: " . $deleteStmt->error;
        }

        $deleteStmt->close();
    }
    ?>

</body>
</html>
