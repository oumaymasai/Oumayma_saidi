<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'main');

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the user is authenticated and is a staff member
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'biomed') {
    header('Location: login.html');
    exit;
}

// Retrieve the staff ID based on the logged-in user's credentials
$query_staff = "SELECT id FROM users WHERE role = 'biomed' AND username = '" . $_SESSION['username'] . "'";
$result_staff = mysqli_query($conn, $query_staff);
$row_staff = mysqli_fetch_assoc($result_staff);
$staff_id = $row_staff['id'];

// Retrieve the complaints for the current staff member from the database
$query = "SELECT TechRadioName, email, message, created_at, status
FROM complains
WHERE TechRadioName = '" . $_SESSION['username'] . "'  AND status = 'approved';
";

$result = mysqli_query($conn, $query);

if ($result === false) {
    // handle the error
    die("Error: " . mysqli_error($conn));
}

// Display the complaints in the table
echo '<table>';
echo '<tr><th>Email</th><th>Description</th><th>Date</th></tr>';
$pending_count = 0;
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>' . $row['message'] . '</td>';
    echo '<td>' . $row['created_at'] . '</td>';

    echo '</tr>';
    if ($row['status'] != 'pending') {
        $pending_count++;
    }
}
echo '</table>';

// Retrieve the information of the logged-in user
$query_profile = "SELECT username, email, image FROM users WHERE id = $staff_id ";
$result_profile = mysqli_query($conn, $query_profile);
$row_profile = mysqli_fetch_assoc($result_profile);
$username = $row_profile['username'];
$email = $row_profile['email'];
$image = ($row_profile['image']);

// Check if there are new approved complaints
$query_new_complaints = "SELECT COUNT(*) as count FROM complains WHERE TechRadioName = $staff_id and status = 'approved' and is_notified = 0";
$result_new_complaints = mysqli_query($conn, $query_new_complaints);
$row_new_complaints = mysqli_fetch_assoc($result_new_complaints);
$new_complaints_count = $row_new_complaints['count'];

// Update the is_notified flag for the new approved complaints
$query_update_notified = "UPDATE complains SET is_notified = 1 WHERE TechRadioName = $staff_id and status = 'approved' and is_notified = 0";
mysqli_query($conn, $query_update_notified);

// Display the profile section
echo '<div class="profile">';
echo '<img src="data:image/jpg;base64,' . base64_encode($image) . '" alt="Profile Picture" onclick="location.href=\'profile.php\'">';

  echo '<i id="notification-icon" class="notification-dot"></i>';
  echo '</div>';
  
  // Display the pending complaints count
  echo '<div class="pending-count">';
  echo '<span>Number of approved complaints: ' . $pending_count . '</span>';
  echo '</div>';
  
  // Close the database connection
  mysqli_close($conn);

  



?>
<script>
function checkForNewComplaints() {
    // Make an AJAX request to the server to check for new approved complaints
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var newComplaintsCount = parseInt(this.responseText);
            // Update the notification dot
            var notificationDot = document.getElementById("notification-icon");
            if (newComplaintsCount > 0) {
                notificationDot.style.backgroundColor = "red";
                // Refresh the page to show the new approved complaints
                location.reload();
            } else {
                notificationDot.style.backgroundColor = "grey";
            }
        }
    };
    xhttp.open("GET", "check_nofications.php", true);
    xhttp.send();
}
setInterval(checkForNewComplaints,2000)
</script>

<style>

body {
font-family: Arial, sans-serif;
background-image: url('Background.jpg');
background-size: cover;
background-repeat: no-repeat;

}

.notification-dot {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background-color: <?php echo ($new_complaints_count > 0) ? 'red' : 'grey'; ?>;
  display: inline-block;
  margin-left: 5px;
}


.profile {
  position: absolute;
  top: 20px;
  right: 20px;
  text-align: center;
}

.profile img {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  object-fit: cover;
  margin: 0px;
}

table {
  font-family: Arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 20px;
  overflow-x: auto;
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
