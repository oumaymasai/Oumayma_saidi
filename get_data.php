<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'main');

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the product value from the query string
$product = $_GET['product'];

// Retrieve the data from the machines table for the selected product
$query = "SELECT  company, modality, email FROM machines WHERE product='$product'";
$result = mysqli_query($conn, $query);

// Convert the result set to an associative array and return it as JSON
$data = mysqli_fetch_assoc($result);
echo json_encode($data);

// Close the database connection
mysqli_close($conn);
?>
