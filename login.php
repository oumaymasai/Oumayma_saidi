<?php
// Start the session
session_start();

// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'main');

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Query the users table to retrieve the user with the given credentials
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    // Check if the user is found in the database
    if (mysqli_num_rows($result) >= 1) {
        // Retrieve the user's role from the database
        $row = mysqli_fetch_assoc($result);
        $role = $row['role'];

        // Set the session variables for the logged-in user
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;
        $_SESSION['password'] = $password;
        
        // Insert the staff name into the staff_names table
      

        // Redirect the user to the appropriate page
        if ($role == 'admin') {
            header('Location: index.php');
        } else if ($role == 'biomed') {
            header('Location: index.php');
        }else if ($role == 'user') {
            header('Location: index.php');
        }
        else if ($role == 'fourni') {
        header('Location: index.php');
    }
    } else {
        // Display an error message if the user is not found in the database
        echo 'Invalid username or password';
        
    }
}

// Close the database connection
mysqli_close($conn);
?>
