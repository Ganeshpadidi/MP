
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
