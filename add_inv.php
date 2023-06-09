<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $ProductID = $_POST["ProductID"];
  $assetName = $_POST["ProductName"];
  $location = $_POST["quantity"];
  $status = $_POST["location"];

  // Connect to the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "main_db";
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Prepare a SQL statement to insert the data into the database
  $stmt = $conn->prepare("INSERT INTO inventory (ProductID, ProductName, StockLevel, ReorderLevel) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $ProductID, $ProductName, $StockLevel, $ReorderLevel);

  // Execute the statement
  if ($stmt->execute() === TRUE) {
    echo "Asset added successfully";
  } else {
    echo "Error adding asset: " . $conn->error;
  }

  $id = $_GET["ProductID"];
  // Execute the SQL DELETE statement
$sql = "DELETE FROM inventory WHERE id = $id";
if ($conn->query($sql) === TRUE) {
  echo "Asset deleted successfully";
} else {
  echo "Error deleting asset: " . $conn->error;
}
$sql1 = "SELECT * FROM inventory";
$result = $conn->query($sql1);

// Fetch the data from the result set and store it in an array
$inventiory = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $inventiory[] = $row;
    }
}

// Generate the HTML table rows using the data
if (!empty($inventiory)) {
    foreach ($inventiory as $inv) {
        echo "<tr>";
        echo "<td>" . $inv['ProductID'] . "</td>";
        echo "<td>" . $inv['ProductName'] . "</td>";
        echo "<td>" . $inv['StockLevel'] . "</td>";
        echo "<td>" . $inv['ReorderLevel'] . "</td>";
        echo "</tr>";
    }
}




  // Close the database connection
  $stmt->close();
  $conn->close();
}
?>
