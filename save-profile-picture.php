<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'main');

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the user is authenticated
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

// Retrieve the user's ID based on their username
$username = $_SESSION['username'];
$query_user = "SELECT id FROM users WHERE username = '$username'";
$result_user = mysqli_query($conn, $query_user);
$row_user = mysqli_fetch_assoc($result_user);
$user_id = $row_user['id'];

// Check if an image was uploaded
if (isset($_FILES['image'])) {
  $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

  // Save the image to the database
  $query_save = "UPDATE users SET image = '$image' WHERE id = $user_id";
  $result_save = mysqli_query($conn, $query_save);

  if ($result_save === false) {
    // handle the error
    die("Error: " . mysqli_error($conn));
  }

  // Redirect to the profile page
  header('Location: profile.php');
  exit;
}
?>
