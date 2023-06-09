<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Mon formulaire</title>
    <link rel="stylesheet" href="bon.css">  
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
      <h1>Bon d'intervention</h1>
    <form method="POST" action="bon.php">
      <label for="client">Client:</label>
      <input type="text" id="client" name="client"><br><br>
    
      <label for="equipement">Équipement:</label>
      <input type="text" id="equipement" name="equipement"><br><br>
    
      <label for="marque">Marque:</label>
      <input type="text" id="marque" name="marque"><br><br>
    
      <label for="defauts">Défauts signalés:</label>
      <input type="text" id="defauts" name="defauts"><br><br>
    
      <label for="date">Date:</label>
      <input type="date" id="date" name="date"><br><br>
    
      <label for="heure">Heure:</label>
      <input type="time" id="heure" name="heure"><br><br>
    
      <label for="details">Détails de l'intervention:</label>
      <input type="text" id="details" name="details"><br><br>
    

    
      <label for="acheve">Achevé :</label>
                                <select name="acheve" id="acheve">
                                  <option value="oui">Oui</option>
                                  <option value="non">Non</option>
                                </select><br>
    
      <label for="duree">Durée:</label>
De <input type="time" id="duree_de" name="duree_de"> à <input type="time" id="duree_a" name="duree_a"><br><br>
    
      <label for="reference">Référence:</label>
      <input type="text" id="reference" name="reference"><br><br>
    
      <label for="quantite">Quantité:</label>
      <input type="number" id="quantite" name="quantite"><br><br>
    
     
    
      <label for="technicien">Technicien:</label>
      <input type="text" id="technicien" name="technicien"><br><br>
      <td> <input type="submit" value="submit" ></td>
    </div>
    </form>    
  </body>
</html>
