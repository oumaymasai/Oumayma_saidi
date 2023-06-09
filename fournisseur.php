<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'main');

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if a status update has been requested

if (isset($_POST['status'])) {
    foreach ($_POST['status'] as $complaint_id => $status) {
        // Prepare the query
         if ($status === 'approve') {
            $query = "UPDATE complains SET status='approved' WHERE id=$complaint_id ";
        } 
        $result = mysqli_query($conn, $query);
        if ($result === false) {
            // handle the error
            die("Error: " . mysqli_error($conn));
        }
    }
}

// Retrieve all the complaints from the database
$query = "SELECT id, TechRadioName, Intitule, message, status, created_at,email FROM complains where status='approved' and is_notified=0 ";
$result = mysqli_query($conn, $query);

if ($result === false) {
    // handle the error
    die("Error: " . mysqli_error($conn));
}

// Display the complaints in the table
echo '<form method="POST">';
echo '<table>';
echo '<tr><th>Nom</th><th>Email</th><th>Date </th></tr>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
  
    echo '<td>' . $row['TechRadioName'] . '</td>';
    echo '<td><a href="desfour.php?id=' . $row['id'] . '" style="text-decoration: none; color:black;">' . $row['email'] . '</a></td>';

    
    echo '<td>' . $row['created_at'] . '</td>';
    
    echo '</tr>';
}
echo '</table>';
echo '</form>';

// Close the database connection
mysqli_close($conn);
?>
<style>
  body {
font-family: Arial, sans-serif;
background-image: url('Background.jpg');
background-size: cover;
background-repeat: no-repeat;

}

    table {
  font-family: Arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 20px;
}

td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

tr {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #29aac4;
  color: white;
}

h1 {
  text-align: center;
  margin-top: 50px;
  font-size: 36px;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 0 20px;
}

</style>