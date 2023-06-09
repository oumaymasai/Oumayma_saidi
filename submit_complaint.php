<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "main";
  
  $conn = new mysqli($servername, $username, $password, $dbname);
// Check if the form has been submitted
if(isset($_POST['submit'])) {
    // Validate and sanitize the user input
    session_start();
    $user=$_SESSION['username'];
    $email = $_POST['email'];
    $complaint = $_POST['complaint'];
    $service = $_POST['service'];
    $marque = $_POST['marque'];
    $entreprise = $_POST['entreprise'];
    $intitule = $_POST['intitule'];
  

    // Check if the connection is successful
    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
// Retrieve the staff id and username from the database

// Retrieve the user id and username from the database
$query_user = "SELECT id, username FROM users WHERE email = '$email'";
$result_user = mysqli_query($conn, $query_user);
$row_user = mysqli_fetch_assoc($result_user);
if ($row_user !== null) {
    $user_id = $row_user['id'];
} else {
    // gérer le cas où $row_user est null
}
if ($row_user !== null) {
    $username = $row_user['id'];
} else {
    // gérer le cas où $row_user est null
}

// Insert the complaint into the database
$query = "INSERT INTO complains (TechRadioName, Intitule, message, service, marque, entreprise, email) VALUES ('$user','$intitule', '$complaint', '$service', '$marque', '$entreprise', '$email' )";
$result = mysqli_query($conn, $query);

// Check if the insertion was successful
if($result) {
    echo "Complaint submitted successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}






    // Close the database connection
    mysqli_close($conn);
   


    header('Location: user.php');


    


}

?>
