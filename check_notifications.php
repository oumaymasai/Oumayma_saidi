<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'main');

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the user is authenticated and is a staff member
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'staff') {
    header('Location: login.html');
    exit;
}

// Retrieve the staff ID based on the logged-in user's credentials
$query_staff = "SELECT id FROM users WHERE role = 'staff' AND username = '" . $_SESSION['username'] . "'";
$result_staff = mysqli_query($conn, $query_staff);
$row_staff = mysqli_fetch_assoc($result_staff);
$staff_id = $row_staff['id'];

// Check if there are new approved complaints
$query_new_complaints = "SELECT COUNT(*) as count FROM complains WHERE staff_id = $staff_id and status = 'approved' and is_notified = 0";
$result_new_complaints = mysqli_query($conn, $query_new_complaints);
$row_new_complaints = mysqli_fetch_assoc($result_new_complaints);
$new_complaints_count = $row_new_complaints['count'];

// Update the is_notified flag for the new approved complaints
$query_update_notified = "UPDATE complains SET is_notified = 1 WHERE staff_id = $staff_id and status = 'approved' and is_notified = 0";
mysqli_query($conn, $query_update_notified);

// Return the count of new approved complaints as the response
echo $new_complaints_count;

// Close the database connection
mysqli_close($conn);
?>
