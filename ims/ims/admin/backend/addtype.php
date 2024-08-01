
    <?php
    // Include your database configuration here or include a separate file
    require_once('dbconfig.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve values from the form
        $itemID = $_POST["item_id"];
        $itemType = $_POST["item_type"];

        // SQL query to insert inventory type into the addinventory table
        $sql = "INSERT INTO addinventory (item_id, type) VALUES (?, ?)";

        // Prepare and execute the SQL statement
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die("Error: " . $conn->error);
        }

        // Bind parameters to the prepared statement
        $stmt->bind_param("ss", $itemID, $itemType);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Inventory type added successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    }

    // Close the database connection when done
    // $conn->close();
    ?>
</body>
</html>
