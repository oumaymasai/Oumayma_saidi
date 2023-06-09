
<!DOCTYPE html>
<html>
<head>
	<meta content="charset=UTF-8">
	<title >Machine Maintenance Form</title>
<link rel="stylesheet" href="style.css">
</head>
<script>
function loadData() {
    const product = document.getElementById('type').value;
    const xhr = new XMLHttpRequest();
    xhr.open('GET', `get_data.php?product=${product}`, true);
    xhr.onload = function() {
        if (this.status === 200) {
            const data = JSON.parse(this.responseText);
            document.getElementById('marque-label').value = data.modality;
            document.getElementById('company-label').value = data.company;
            document.getElementById('email-label').value = data.email;
        }
    }
    xhr.send();
}

</script>


<main>
<body>
	<header>
		<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="assets.html">Assets</a></li>
            <li><a href="machineinf.php">machineInfo</a></li>
			<li><a href="maintenance.php">Demande d'intervention</a></li>
            <li><a href="bon.html">Bon d'intervention</a></li>
            <li><a href="user.php">complain</a></li>
            <li class="dropdown">
            <a href="#">More</a>
		<ul class="dropdown-content">
          <li><a href="faq.html">FAQ</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="contact.html">Contact Us</a></li>
		  </ul>
		</nav>
	  </header>
	  <style>
		select {
  width: 300px;
  padding: 5px;
    margin-right: 10px;
}

		
	  </style> <br>
	<h1 style="color:rgb(255, 255, 255);">DEMANDE D'INTERVENTION</h1>
	<form action="submit_maintenance.php" method="post" >
		<table ><tr>
			<td>
		<label for="Service" style="color: white;">Service:</label></td>
	<td><input type="text" id="Service" name="Service"><br></td>
     </tr>
	 <tr>
	<td><label for="product" style="color: white;">Machine Type:</label></td>
<td><select id="type" name="product" onchange="loadData()">
	<?php
          // Connect to the database
          $conn = mysqli_connect('localhost', 'root', '', 'main');

          // Check if the connection is successful
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }

          // Retrieve the modalities from the machines table
          $query = "SELECT DISTINCT type1 FROM machines";
          $result = mysqli_query($conn, $query);

          // Create an option for each modality
          while ($row = mysqli_fetch_assoc($result)) {
              echo "<option value='" . $row['type1'] . "'>" . $row['type1'] . "</option>";
          }

          // Close the database connection
          mysqli_close($conn);
        ?>
		
		</select></td></tr><br>

		<tr>
  <td><label for="marque" style="color: white;">marque:</label></td>
  <td><input type="text" id="marque-label" name="marque-label"><br></td>
</tr>

<tr><td><label for="company" style="color: white;">company:</label></td>
<td>
<input type="text" id="company-label" name="company"><br></td></td></tr><br>
<tr>
	<td><label for="email" style="color: white;">email:</label></td>
	<td>
<input type="text" id="email-label" name="email"><br></td>
<tr>
		<td>
		<label for="Description" style="color: white;">Description:</label></td>
	<td><input type="text" id="Description" name="Description"><br></td>
     </tr>
</tr>



	<tr><td colspan="2"><input type="submit" value="Submit" style="  margin: 10px;
		background-color: #5ca0d3;
		color: white;
		border-radius: 5px;
		border: none;
		padding: 10px ;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
	   
		cursor: pointer;
		transition: background-color 0.3s ease;
		text-transform: uppercase;
		letter-spacing: 1px;
		width: 150px;
		margin: 0 auto; /* Added */
		display: block;"></td></tr>
		</table>
		

	</form>
	
</body>
</main>
</html>
