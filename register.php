<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Process registration form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Retrieve form data
	$username = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];
    $user='user';
	// Check if username already exists
	$sql = "SELECT * FROM users WHERE username = '$username'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo "Username already exists. Please choose a different username.";
	} else {
		// Insert new user record into database
		$sql = "INSERT INTO users (username, password,role, email) VALUES ('$username', '$password','biomed', '$email')";

		if ($conn->query($sql) === TRUE) {
			echo "Registration successful. Please log in.";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
}

$conn->close();
?>
