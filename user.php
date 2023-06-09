<!DOCTYPE html>
<html>
  <head>
    <title>User Page</title>
    <link rel="stylesheet" type="text/css" href="user.css">
    <style>
 body{
  background-image: url('Background.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
input[type="submit"] {
  background-color: #072a9b;
  border: none;
  color: white;
  padding: 0.5rem 1rem;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 1rem;
  border-radius: 0.25rem;
  transition: background-color 0.3s;
}
      /* Style for the Service form-group div */
      .form-group #service {
        background-color: #fff;
        border-radius: 5px;
        border: none;
        padding: 10px;
        margin-bottom: 10px;
        width: 100%;
        box-sizing: border-box;
      
      }
        /* Style for the Marque form-group div */
      .form-group #marque {
        background-color: #fff;
        border-radius: 5px;
        border: none;
        padding: 10px;
        margin-bottom: 10px;
        width: 100%;
        box-sizing: border-box;
      
      }
      /* Style for the Entreprise form-group div */
      .form-group #entreprise {
        background-color: #fff;
        border-radius: 5px;
        border: none;
        padding: 10px;
        margin-bottom: 10px;
        width: 100%;
        box-sizing: border-box;
      
      }
    </style>
  
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
    <div class="complaint-box">
      <h1>Demande d'intervention</h1>
      <form method="post" action="submit_complaint.php">
      <div class="form-group">
          <label for="intitule">Intitulé :</label>
          <input type="text" class="form-control" id="intitule" name="intitule" required>
        </div>
        <div class="form-group service">
          <label for="service">Service :</label>
          <input type="text" class="form-control" id="service" name="service" required>
        </div>
        <div class="form-group">
          
          <div class="form-group">
  <label for="marque">Marque :</label>
  <input type="text" placeholder="Enter Your Marque" class="form-control" id="marque" name="marque" required>
</div>
<div class="form-group">
  <label for="entreprise">Entreprise :</label>
  <input type="text" placeholder="Enter Your Enterprise" class="form-control" id="entreprise" name="entreprise" required>
</div>
        </div>
        <div class="form-group">
          <label for="email">Your Email :</label>
          <input type="email" name="email" placeholder="Enter Your Email" required>
        </div>
        <div class="form-group">
          <label for="complaint">Complaint :</label>
          <textarea name="complaint" placeholder="Enter Your Complaint" required></textarea>
        </div>
        <div class="form-group">
          <input type="submit" name="submit" value="Send">
        </div>
      </form>
    </div>
    
  </body>
</html>
