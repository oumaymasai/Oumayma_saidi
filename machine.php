<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <title>Machine Info</title>
  </head>
  <style>
     body {
  font-family: Arial, sans-serif;
  background-color: #f1f1f1;
}

.container {
  
  margin: 50px auto;
  width: 80%;
  max-width: 800px;
  background-color: #fff;
  padding: 20px;
  box-shadow: 0px 0px 5px #ccc;
}

h1 {
  font-size: 24px;
  margin-top: 0;
}

form {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-bottom: 20px;
}

label {
  font-size: 18px;
  margin-bottom: 10px;
}

select {
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
  width: 100%;
  max-width: 300px;
  margin-bottom: 20px;
}

.info-box {
  display: flex;
  flex-wrap: wrap;
}

#machine-info {
  flex: 1 1 100%;
}

.info-box > div {
  flex: 1 1 25%;
  border: 1px solid #ccc;
  padding: 10px;
  margin: 10px;
}

.info-box p {
  margin: 0;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}


    </style>
  <body>  <div class="container">
      <div class="dropdown">
    <h1>Select a Product</h1>
    <form method="post">
      <label for="product">Products:</label>
      <select name="product" id="product">
        <?php
          // Connect to the database
          $conn = mysqli_connect('localhost', 'root', '', 'main_db');

          // Check if the connection is successful
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }

          // Retrieve the modalities from the machines table
          $query = "SELECT DISTINCT product FROM machines";
          $result = mysqli_query($conn, $query);

          // Create an option for each modality
          while ($row = mysqli_fetch_assoc($result)) {
              echo "<option value='" . $row['product'] . "'>" . $row['product'] . "</option>";
          }

          // Close the database connection
          mysqli_close($conn);
        ?>
      </select>
      </div>
      <div class="info-box">
      <div id="machine-info">
      <input type="submit" name="submit" value="Submit">
    </form>



    <?php
      // Check if the form is submitted
      if (isset($_POST['submit'])) {
          // Retrieve the selected modality from the form
          $selected_modality = $_POST['product'];

          // Connect to the database
          $conn = mysqli_connect('localhost', 'root', '', 'main_db');

          // Check if the connection is successful
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }

          // Retrieve the machine info for the selected modality
          $query = "SELECT * FROM machines WHERE product='$selected_modality'";
          $result = mysqli_query($conn, $query);

          // Display the machine info in a box
          while ($row = mysqli_fetch_assoc($result)) {
              echo "<div style='border: 1px solid black; padding: 10px; margin: 10px;'>";
              echo "<p><strong>Company:</strong> " . $row['company'] . "</p>";
              echo "<p><strong>Modality:</strong> " . $row['modality'] . "</p>";
              echo "<p><strong>Product:</strong> " . $row['product'] . "</p>";
              echo "<p><strong>Email:</strong> " . $row['email'] . "</p>";
              echo "</div>";
          }

          // Close the database connection
          mysqli_close($conn);
      }
    ?>
    </div>
  </body>
</html>
