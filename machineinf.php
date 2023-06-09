<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
	<title>Dropdown List</title>
  
</head>
<body>
<header>
<div class="sidebar">
        <nav>
          <?php
          session_start();

          // Connect to the database
          $conn = mysqli_connect('localhost', 'root', '', 'main');
          
          // Check if the connection is successful
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }
          if (!isset($_SESSION['username']) || $_SESSION['role'] == 'admin') {

        // Insert the staff name into the staff_names table
       
            echo "  <ul><li><a href='admin.php'>Neveaux</a></li>";

        }
        ?>
        <?php
          

          // Connect to the database
          $conn = mysqli_connect('localhost', 'root', '', 'main');
          
          // Check if the connection is successful
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }
          if (!isset($_SESSION['username']) || $_SESSION['role'] == 'admin') {

        // Insert the staff name into the staff_names table
       
            echo "  <ul><li><a href='history.php'>Historique</a></li>";

        }
        

        ?>
            <ul><li><a style="color: rgb(0, 0, 0);" href="index.php">Accueil</a></li>
            <?php
          

          // Connect to the database
          $conn = mysqli_connect('localhost', 'root', '', 'main');
          
          // Check if the connection is successful
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }
          if (!isset($_SESSION['username']) || $_SESSION['role'] == 'admin') {

        // Insert the staff name into the staff_names table
       
            echo "  <ul><li><a href='assets.php'>Ajout machine</a></li>";
            
           
          

        }
        

        ?>
           <?php
          

          // Connect to the database
          $conn = mysqli_connect('localhost', 'root', '', 'main');
          
          // Check if the connection is successful
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }
          if (!isset($_SESSION['username']) || $_SESSION['role'] == 'fourni') {

        // Insert the staff name into the staff_names table
       
            echo " <ul> <li><a href='fournisseur.php'>dashboard</a></li>";
            
           
          

        }
        

        ?>

<?php
          

          // Connect to the database
          $conn = mysqli_connect('localhost', 'root', '', 'main');
          
          // Check if the connection is successful
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }
          if (!isset($_SESSION['username']) || $_SESSION['role'] == 'biomed') {

        // Insert the staff name into the staff_names table
       
        echo "<ul><li><a  href='bon1.php'>Bon d'intervention</a></li>";
        echo "<ul><li><a  href='staff.php'>travaille en attent</a></li>";

        }
        

        ?>



                <?php
          

          // Connect to the database
          $conn = mysqli_connect('localhost', 'root', '', 'main');
          
          // Check if the connection is successful
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }
          if (!isset($_SESSION['username']) || $_SESSION['role'] == 'user') {

        
       
        echo "<ul><li><a  href='machineinf.php'>MachineInfo</a></li>";
        echo "<ul><li><a href='user.php'>Demande d'intervention</a></li>";
        }
        

        ?>
            
            <ul><li><a style="color: rgb(0, 0, 0);" href="contact.html">Contact Us</a></li>
          
            
            
          
        </nav>
      </div>
    </header>
    <style>
      .inf {
       
 text-align:center;
  justify-content: center;
  align-items: center;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
  max-width: 600px;
  margin: 0 auto;
}
/* Style for the select element */
select {
  display:block;
  width:100%;
  appearance: none; /* remove the default arrow icon */
  background-color: #f2f2f2; /* set background color */
  border: none; /* remove border */
  padding: 10px; /* add some padding */
  font-size: 16px; /* set font size */
  color: #555; /* set text color */
  border-radius: 5px; /* add some border radius */
  width: 200px; /* set width */
  margin: 10px 0; /* add some margin */
}

/* Style for the option elements */
option {
  background-color: #f2f2f2; /* set background color */
  color: #555; /* set text color */
  font-size: 16px; /* set font size */
}
input {
  padding: 10px;
  border: 2px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  color: #333;
  background-color: #f9f9f9;
  box-shadow: none;
  transition: border-color 0.2s ease-in-out;
}

input:focus {
  outline: none;
  border-color: #007bff;
}
/* Style for the label elements */
label {
  display:block;
  margin-left:10px;
  display: block; /* set display property to block */
  font-size: 16px; /* set font size */
  margin-bottom: 5px; /* add some margin */
}
    </style>
    <main>
	<form  method="post">
		<label for="service_radio">Service Radio:</label> 
  <?php
  $conn = mysqli_connect('localhost', 'root', '', 'main');
  $sql = "SELECT DISTINCT service_radio FROM machines";
$result = mysqli_query($conn, $sql);

// Generate the first dropdown list
echo '<select name="service_radio" id="service_radio" >';
echo'<option value="" >select service</option>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<option value="' . $row['service_radio'] . '">' . $row['service_radio'] . '</option>';
}
echo '</select>';?>
		<br><br>
		<label for="type1">Type 1:</label>
		<select name="type1" id="type1">
			<option value="">--Select Type 1--</option>
		</select>
		<br><br>
		<label for="machine_name">Machine Name:</label>
		<select name="machine_name" id="machine_name">
			<option value="">--Select Machine--</option>
		</select>
		<br><br>
		

 
  
  <input type="submit" name='submit' id="get_info_button" value='Get Info' >
</form>

<script>
// Add an event listener to the fourth dropdown list (machines) to enable the "Get Info" button when a machine is selected
var machinesDropdown = document.getElementById("service_radio");
var getInfoButton = document.getElementById("get_info_button");
machinesDropdown.addEventListener("change", function() {
  var selectedMachine = machinesDropdown.value;
  if (selectedMachine !== "") {
    document.getElementById("machine_name").value = selectedMachine;
    getInfoButton.disabled = false;
  } else {
    getInfoButton.disabled = true;
  }
});
</script>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			// When the value of the Service Radio dropdown changes, load the options for the Type 1 dropdown
			$('#service_radio').change(function(){
				var service_radio = $(this).val();
				$.ajax({
					url: 'get_type1.php',
					method: 'post',
					data: {service_radio: service_radio},
					success: function(response){
						$('#type1').html(response);
						$('#machine_name').html('<option value="">--Select Machine--</option>');
					}
				});
			});

			// When the value of the Type 1 dropdown changes, load the options for the Machine Name dropdown
			$('#type1').change(function(){
				var service_radio = $('#service_radio').val();
				var type1 = $(this).val();
				$.ajax({
					url: 'get_machines.php',
					method: 'post',
					data: {service_radio: service_radio, type1: type1},
					success: function(response){
						$('#machine_name').html(response);
					}
				});
			});
		});
	</script>
  <div class='inf'>
   <?php
// Establish a database connection

if(isset($_POST['submit'])){
// Get the information for the selected machine
$type1=$_POST['type1'];
$ser=$_POST['service_radio'];
$machine_name = $_POST['machine_name'];
$sql = "SELECT * FROM machines WHERE machine = '$machine_name' and type1='$type1' and service_radio='$ser'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Display the information
echo '<p><strong>Machine Name:</strong> ' . $row['machine'] . '</p>';
echo '<p><strong>Service Radio:</strong> ' . $row['service_radio'] . '</p>';
echo '<p><strong>Type 1:</strong> ' . $row['type1'] . '</p>';
echo '<p><strong>company:</strong> ' . $row['company'] . '</p>';
echo '<p><strong>email:</strong> ' . $row['email'] . '</p>';
}
// Close the database connection
mysqli_close($conn);
?>
</div>
 </main> 

</body>
</html>