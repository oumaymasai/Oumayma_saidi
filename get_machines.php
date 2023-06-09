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

// Get the options for the fourth dropdown list (machines) based on the values of the first three dropdown lists (service radio, type1, and type2)
$service_radio = $_POST['service_radio'];
$type1 = $_POST['type1'];
$sql = "SELECT machine FROM machines WHERE service_radio = '$service_radio' AND type1 = '$type1'";
$result = mysqli_query($conn, $sql);

// Generate the options for the fourth dropdown list (machines)
echo '<option value="">--Select Machine--</option>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<option value="' . $row['machine'] . '">' . $row['machine'] . '</option>';
}

// Close the database connection
mysqli_close($conn);
?>
