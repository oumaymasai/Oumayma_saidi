<?php
// Connect to the database
$dbhost = 'localhost';
$dbname = 'main';
$dbuser = 'root';
$dbpass = '';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
  die('Could not connect: ' . mysqli_error($con));
}

// Add asset to database
 {
  $service_radio = $_POST['service_radio'];
  $type1 = $_POST['type1'];
  $machine = $_POST['machine'];
  $company = $_POST['company'];
  $email = $_POST['email'];
  $date_achat = $_POST['date_achat'];
  $garantie = $_POST['garantie'];

  $query = "INSERT INTO machines (service_radio, type1, machine, company, email, date_achat, garantie) VALUES ('$service_radio', '$type1', '$machine', '$company', '$email', '$date_achat', '$garantie')";
  mysqli_query($conn, $query);
  
}




mysqli_close($conn);
header('Location: assets.php');
?>