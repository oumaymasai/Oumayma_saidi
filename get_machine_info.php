<?php
// Get machine name from POST data
$machineName = $_POST['machineName'];

// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Prepare SQL query
$sql = "SELECT * FROM machines WHERE product Like '%$machineName%'";

// Execute SQL query
$result = mysqli_query($conn, $sql);

// Check for errors
if (!$result) {
	die("Error: " . mysqli_error($conn));
}

// Check if machine exists
if (mysqli_num_rows($result) > 0) {
	// Machine found, display info
	$row = mysqli_fetch_assoc($result);
	echo "<h2>Machine Information</h2>";
	echo "<p><strong>Name:</strong> " . $row["product"] . "</p>";
	echo "<p><strong>company:</strong> " . $row["company"] . "</p>";
	echo "<p><strong>Model:</strong> " . $row["modality"] . "</p>";
	echo "<p><strong>email:</strong> " . $row["email"] . "</p>";
} else {
	// Machine not found
	echo "<p>No machine found with name '$machineName'</p>";
}

// Close database connection
mysqli_close($conn);
?>
