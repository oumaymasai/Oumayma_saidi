<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'main');

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the user is authenticated and is a staff member
session_start();


// Retrieve the staff ID based on the logged-in user's credentials
$query_staff = "SELECT id FROM users WHERE role = '" . $_SESSION['role'] . "' AND username = '" . $_SESSION['username'] . "'";
$result_staff = mysqli_query($conn, $query_staff);
$row_staff = mysqli_fetch_assoc($result_staff);
$staff_id = $row_staff['id'];

// Retrieve the staff member's profile information from the database
$query_profile = "SELECT username, email, image FROM users WHERE id = $staff_id";
$result_profile = mysqli_query($conn, $query_profile);
$row_profile = mysqli_fetch_assoc($result_profile);
$username = $row_profile['username'];
$email = $row_profile['email'];
$image = ($row_profile['image']);

// Display the profile section
echo '<div class="profile">';
if ($image) {
    echo '<div class="profile-image">';
    echo '<a href="index.php"><img src="data:image/jpg;base64,' . base64_encode($image) . '" alt="Profile Picture"></a>';
    echo '</div>';
} else {
    echo '<div class="profile-image placeholder">';
    echo '<i class="fas fa-user-circle"></i>';
    echo '</div>';
}
echo '<div class="profile-info">';
echo '<h2>' . $username . '</h2>';
echo '<p class="email">' . $email . '</p>';
echo '<form method="POST" action="save-profile-picture.php" enctype="multipart/form-data">';
echo  '<label for="image-upload" class="image-upload-label">';
  echo'  <i class="fa fa-camera"></i>';
  echo'  Choose a profile picture';
 echo' </label>';
 echo' <input id="image-upload" type="file" name="image">';
  echo'<input type="submit" value="Save">';
echo'</form>';

echo '</div>';
echo '</div>';
?>

<style>
.profile {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 50px;
}

.profile-image {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    overflow: hidden;
    margin-bottom: 20px;
}

.profile-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.placeholder {
    background-color: #eee;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 64px;
    color: #aaa;
}

.profile-info {
    text-align: center;
}

h2 {
    margin-top: 0;
}

.email {
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

input[type="file"] {
    margin-bottom: 10px;
    display: none;
}

input[type="submit"]
  {
    background-color: #4285F4;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 20px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #357AE8;
}
.image-upload-label {
  display: inline-block;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;
  color: #fff;
  background-color: #007bff;
  border-radius: 5px;
  padding: 10px 20px;
  transition: background-color 0.2s ease;
}

.image-upload-label:hover {
  background-color: #0069d9;
}

.image-upload-label i {
  margin-right: 10px;
}

</style>
