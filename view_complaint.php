<?php
$conn = mysqli_connect('localhost', 'root', '', 'main_db');
// Retrieve all the complaints from the database
$query = "SELECT id, username, email, staffname, message, created_at, status FROM complains ";
$result = mysqli_query($conn, $query);

if ($result === false) {
    // handle the error
    die("Error: " . mysqli_error($conn));
}

// Display the complaints in the table
echo '<table>';
echo '<tr><th>Sender Name</th></tr>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td><a href="complaint_details.php?id=' . $row['id'] . '">' . $row['username'] . '</a></td>';
    echo '</tr>';
}
echo '</table>';

// Close the database connection
mysqli_close($conn);
?>