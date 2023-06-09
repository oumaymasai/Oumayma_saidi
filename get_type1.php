<?php
// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the options for the second dropdown list (type1) based on the value of the first dropdown list (service radio)
$service_radio = $_POST['service_radio'];
$sql = "SELECT DISTINCT type1 FROM machines WHERE service_radio = '$service_radio'";
$result = mysqli_query($conn, $sql);

// Generate the options for the second dropdown list (type1)
echo '<option value="">--Select Type 1--</option>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<option value="' . $row['type1'] . '">' . $row['type1'] . '</option>';
}

// Close the database connection
mysqli_close($conn);
?>
