<!DOCTYPE html>
<html>
<head>
    <title>Search Inventory</title>
</head>
<body>
    <h2>Search Inventory</h2>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="search_id">Search by ID:</label>
        <input type="text" name="search_id">
        <br><br>

        <label for="search_type">Search by Type:</label>
        <select name="search_type">
            <option value="">Select Type</option>
            <?php
            // Include your database configuration here or include a separate file
            require_once('dbconfig.php');

            $sql = "SELECT DISTINCT type FROM inventoryinfo";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row['type'] . '">' . $row['type'] . '</option>';
                }
            }
            ?>
        </select>
        <br><br>

        <label for="search_dept">Search by Department:</label>
        <input type="text" name="search_dept">
        <br><br>

        <label for="search_date">Search by Date:</label>
        <input type="date" name="search_date">
        <br><br>

        <input type="submit" value="Search">
    </form>

    <?php
    // Include your database configuration here or include a separate file
    require_once('dbconfig.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve values from the form
        $search_id = $_POST["search_id"];
        $search_type = $_POST["search_type"];
        $search_dept = $_POST["search_dept"];
        $search_date = $_POST["search_date"];

        // Construct the SQL query based on the provided input
        $sql = "SELECT * FROM inventoryinfo WHERE ";

        if (!empty($search_id)) {
            $sql .= "item_id = '$search_id'";
        } elseif (!empty($search_type)) {
            $sql .= "type = '$search_type'";
        } elseif (!empty($search_dept)) {
            $sql .= "dept = '$search_dept'";
        } elseif (!empty($search_date)) {
            $sql .= "date = '$search_date'";
        } else {
            echo "Please enter a search criteria.";
            exit();
        }

        // Execute the query
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Display search results in a table
            echo "<h2>Search Results</h2>";
            echo "<table border='1'>";
            echo "<tr><th>Item ID</th><th>Type</th><th>Department</th><th>Price</th><th>Date</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["item_id"] . "</td>";
                echo "<td>" . $row["type"] . "</td>";
                echo "<td>" . $row["dept"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                echo "<td>" . $row["date"] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "No results found.";
        }
    }
    ?>
</body>
</html>
