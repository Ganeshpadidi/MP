<!DOCTYPE html>
<html>
<head>
    <title>Add Inventory Information</title>
    <!-- Include the local qrcode.js library files -->
    <script src="qrcode.min.js"></script>
</head>
<body>
    <h2>Add Inventory Information</h2>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="item_id">Item ID:</label>
        <input type="text" name="item_id" required><br><br>

        <label for="type">Type:</label>
        <select name="type" id="typeDropdown" required>
            <?php
            // Fetch types from the addinventory table and populate the dropdown
            require_once('dbconfig.php');

            $sql = "SELECT DISTINCT type FROM addinventory";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row['type'] . '">' . $row['type'] . '</option>';
                }
            }
            ?>
        </select><br><br>

        <label for="dept">Department:</label>
        <input type="text" name="dept" required><br><br>

        <label for="price">Price:</label>
        <input type="text" name="price" required><br><br>

        <label for="date">Date:</label>
        <input type="date" name="date" required><br><br>

        
        <input type="button" value="Generate QR Code" onclick="generateQRCode()">
        <input type="submit" value="Submit" id="submitButton" disabled>
    </form>

    <div id="qrcode"></div>

    <!-- Add a download button -->
    <button onclick="downloadQRCode()">Download QR Code</button>

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
    
    // Generate QR code data
    
    // Generate QR code and get the file path
    
    // SQL query to insert inventory information into the inventoryinfo table
    $insertQuery = "INSERT INTO inventoryinfo (item_id, type, dept, price, date) VALUES (?, ?, ?, ?, ?)";
    
    // Prepare and execute the SQL statement
    $stmt = $conn->prepare($insertQuery);
    if ($stmt === false) {
        die("Error: " . $conn->error);
    }
    
    // Bind parameters to the prepared statement
    $stmt->bind_param("sssss", $itemID, $itemType, $dept, $price, $date);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "Inventory information added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
    
    // Close the statement
    $stmt->close();
}
?>


    <script>
        // Function to generate the QR code using local qrcode.js
        function generateQRCode() {
            var itemID = document.querySelector('input[name="item_id"]').value;
            var itemType = document.querySelector('#typeDropdown').value;
            var dept = document.querySelector('input[name="dept"]').value;
            var price = document.querySelector('input[name="price"]').value;
            var date = document.querySelector('input[name="date"]').value;

            // Generate QR code data
            if (itemID && itemType && dept && price && date) {
        // Generate QR code data
        var qrData = "Item ID: " + itemID + "\nType: " + itemType + "\nDepartment: " + dept + "\nPrice: " + price + "\nDate: " + date;

        // Clear any previous QR code
        document.getElementById('qrcode').innerHTML = '';

        // Create and display the QR code using local qrcode.js
        var qrcode = new QRCode(document.getElementById('qrcode'), {
            text: qrData,
            width: 128,
            height: 128
        });

        // Enable the submit button
        document.getElementById('submitButton').disabled = false;
    } else {
        alert("Please fill in all the input fields before generating the QR code.");
    }
        }

        // Function to download the QR code image
        function downloadQRCode() {
            var qrcode = document.getElementById('qrcode').getElementsByTagName('img')[0];
            if (qrcode) {
                var canvas = document.createElement('canvas');
                var context = canvas.getContext('2d');
                canvas.width = qrcode.width;
                canvas.height = qrcode.height;
                context.drawImage(qrcode, 0, 0);

                // Trigger the download
                var link = document.createElement('a');
                link.href = canvas.toDataURL('image/png');
                link.download = 'qrcode.png';
                link.click();
            }
        }
    </script>
</body>
</html>
