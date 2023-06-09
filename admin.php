<link rel="stylesheet" href="style.css">
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



// Retrieve all the complaints from the database
$query = "SELECT id, TechRadioName, Intitule, message, status, created_at,email FROM complains where not status='approved'";
$result = mysqli_query($conn, $query);

if ($result === false) {
    // handle the error
    die("Error: " . mysqli_error($conn));
}

// Display the complaints in the table
echo '<form method="POST">';
echo '<table>';
echo '<tr><th>Technicien de Radio</th><th>Email</th><th>Date</th><th>Status</th></tr>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
  
    echo '<td>' . $row['TechRadioName'] . '</td>';
    echo '<td><a href="description.php?id=' . $row['id'] . '" style="text-decoration: none; color:black;">' . $row['email'] . '</a></td>';

    
    echo '<td>' . $row['created_at'] . '</td>';
    echo '<td>';
    echo '<input type="hidden" name="complaint_id_' . $row['id'] . '" value="' . $row['id'] . '">';

    echo $row["status"];
    
echo '</td>';
    echo '</tr>';
}
echo '</table>';
echo '</form>';

// Close the database connection
mysqli_close($conn);
?>
<style>

    table {
  font-family: Arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 20px;
  background-color:#f2f2f2;
}

td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

tr:nth-child(even) {
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