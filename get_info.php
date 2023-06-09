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

// Get the information for the selected machine
$type1=$_POST['type1'];
$ser=$_POST['service_radio'];
$machine_name = $_POST['machine_name'];
$sql = "SELECT * FROM machines WHERE machine = '$machine_name' and type1='$type1' and service_radio='$ser'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Display the information
echo '<p><strong>Machine Name:</strong> ' . $row['machine'] . '</p>';
echo '<p><strong>Service Radio:</strong> ' . $row['service_radio'] . '</p>';
echo '<p><strong>Type 1:</strong> ' . $row['type1'] . '</p>';
echo '<p><strong>company:</strong> ' . $row['company'] . '</p>';
echo '<p><strong>email:</strong> ' . $row['email'] . '</p>';

// Close the database connection
mysqli_close($conn);
?>