<?php
$conn = mysqli_connect('localhost', 'root', '', 'main_db');


// Check if a complaint has been clicked
if (isset($_GET['id'])) {
    // Retrieve the complaint from the database
    $query = "SELECT * FROM complaints WHERE id = " . $_GET['id'];
    $result = mysqli_query($conn, $query);
  
    if ($result === false || mysqli_num_rows($result) == 0) {
        // Handle the error
        die("Error: Complaint not found");
    }
  
    // Display the complaint details
    $complaint = mysqli_fetch_assoc($result);
  
    echo '<h2>Complaint Details</h2>';
    echo '<table>';
    echo '<tr><td><strong>Sender Name:</strong></td><td>' . $complaint['username'] . '</td></tr>';
    echo '<tr><td><strong>Sender Email:</strong></td><td>' . $complaint['email'] . '</td></tr>';
    echo '<tr><td><strong>Staff Name:</strong></td><td>' . $complaint['staffname'] . '</td></tr>';
    echo '<tr><td><strong>Message:</strong></td><td>' . $complaint['message'] . '</td></tr>';
    echo '<tr><td><strong>Created At:</strong></td><td>' . $complaint['created_at'] . '</td></tr>';
    echo '<tr><td><strong>Status:</strong></td><td>' . $complaint['status'] . '</td></tr>';
    echo '</table>';
  }
  
  
  
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
      echo '<td><a href="view_complaint.php?id=' . $row['id'] . '">' . $row['username'] . '</a></td>';
      echo '</tr>';
  }
  echo '</table>';




// Check if a status update has been requested
if (isset($_POST['status'])) {
    foreach ($_POST['status'] as $complaint_id => $status) {
      // Prepare the query
      if ($status === 'approve') {
        $query = "UPDATE complaints SET status='approved' WHERE id=$complaint_id ";
        $result = mysqli_query($conn, $query);
        if ($result === false) {
          // handle the error
          die("Error: " . mysqli_error($conn));
        }
      } elseif ($status === 'reconsider') {
        $query = "SELECT * FROM complaints WHERE id=$complaint_id";
        $result = mysqli_query($conn, $query);
        if ($result === false) {
          // handle the error
          die("Error: " . mysqli_error($conn));
        }
        $row = mysqli_fetch_assoc($result);
        $sender_email = $row['email'];
        $sender_name = $row['username'];
        $complaint_message = $row['message'];
        $complaint_id = $row['id'];
        // code to send email to the sender requesting more details goes here
      }
    }
  }
  // Retrieve all the complaints from the database
$query = "SELECT id, username, email, staffname, message, created_at, status FROM complains";
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
    echo '<td><a href="view_complaint.php?id=' . $row['id'] . '">' . $row['username'] . '</a></td>';
    echo '</tr>';
}
echo '</table>';

// Close the database connection
mysqli_close($conn);

?>