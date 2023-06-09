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

// Get the options for the third dropdown list (type2) based on the values of the first and second dropdown lists (service radio and type1)
$service_radio = $_POST['service_radio'];
$type1 = $_POST['type1'];
$sql = "SELECT DISTINCT type2 FROM machines WHERE service_radio = '$service_radio' AND type1 = '$type1'";
$result = mysqli_query($conn, $sql);

// Generate the options for the third dropdown list (type2)
echo '<option value="">--Select Type 2--</option>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<option value="' . $row['type2'] . '">' . $row['type2'] . '</option>';
}

// Close the database connection
mysqli_close($conn);
?>
