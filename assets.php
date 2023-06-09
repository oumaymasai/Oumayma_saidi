<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Assets Management</title>
    <style>
     section {
    background-color: rgb(255, 255, 255);
    padding: 1em;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
    height: 500px;
}
input[type=text] ,input[type=date],input[type=number]{
  padding: 5px;
  margin-right: 10px;
  text-align: justify;
  width: 300px;
}
tr{
  padding-left: 100px;
}
.add-asset-form {
  width: 50%;
  margin: 50px auto;
  padding: 30px;
  background-color: #f2f2f2;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
  margin-right: 200px;
}

      </style>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
    <main>
      <h1 style="color: rgb(255, 255, 255);">Welcome to My GMER</h1>
      <section id="assets">
        <center>
        <h2>Ajouter une Machine</h2>
        
      <table style="width: 500px;">
      
        <form id="add-asset-form" action="add_asset.php" method="post">
          <tr>
            <div class="form-group">
              <td><label for="service_radio">Service Radio:</label></td>
                <td><input type="text" class="form-control" id="service_radio" name="service_radio" required></td>
         <tr>
                <td><label for="type1">Type:</label></td>
                  <td><input type="text" class="form-control" id="type1" name="type1" required></td></tr>
         
            <tr>
              <td><label for="machine">Nom Machine:</label></td>
                <td><input type="text" class="form-control" id="machine" name="machine" required></td></tr>
          <tr>
           <td> <label for="company">Entreprise:</label></td>
          <td><input type="text" class="form-control" id="company" name="company" required></td>
          </tr>
<tr>
           <td> <label for="email">Email:</label></td>
            <td><input type="text" class="form-control" id="email" name="email" required></td>
          </tr> 
          <tr>       
            <td><label for="date_achat">Date achat:</label></td>
          <td><input type="date" class="form-control" id="date_achat" name="date_achat" required></td>
          </tr> 
          <tr>
            <td><label for="garantie">Garantie:</label></td>
          <td><input type="number" class="form-control" id="garantie" name="garantie" required></td>
          </tr>
          </div>
          <tr>
            <td  colspan="2">
          <input type="submit" value="Ajout Machine" onclick="addAsset()" style=" margin: 10px;
            background-color: #5ca0d3;
          color: rgb(255, 255, 255);
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
          width: 160px;
          margin: 0 auto; /* Added */
          display: block; ">
          </td><td></td></tr>
        </form>      
    </td>
    </tr>

      </table>
    </center>
      
    </main>
  </body>
</html>