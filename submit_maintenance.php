<?php
// Create database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main";

$conn = new mysqli($servername, $username, $password, $dbname);

// Get form data
$machineName = $_POST['Service'];
$machineType = $_POST['product'];
$panneType = $_POST['marque-label'];
$maintenanceType = $_POST['company'];
$serialnumber=$_POST['email'];
$descriptions= $_POST['Description'];


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insert maintenance record into database
$sql = "INSERT INTO formulair (Service, Type, Marque, Company, Email , Description) VALUES ('$machineName', '$machineType', '$panneType', '$maintenanceType', '$serialnumber' , '$descriptions')";


if ($conn->query($sql) === TRUE) {
  echo "Maintenance record added successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
header('Location: maintenance.php');
exit;
?>
