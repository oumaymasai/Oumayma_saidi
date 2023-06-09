<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <title>My GMER</title>
    <style>
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
    </header><main>
    <?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'main');

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT id, TechRadioName, Intitule, message, service, marque, entreprise, email, status FROM complains WHERE id = $id";
  $result = mysqli_query($conn, $query);
  
  if ($result === false) {
      // handle the error
      die("Error: " . mysqli_error($conn));
  }
  
  $row = mysqli_fetch_assoc($result);
}

if (isset($_POST['send'])) {
  $selectedStaff = $_POST['staff'];
  $complaintId = $_POST['complaint_id'];

  // Update the complaint with the selected staff
  $query = "UPDATE complains SET status='approved', TechRadioName='$selectedStaff' ,is_notified=1 WHERE id=$complaintId";
  $result = mysqli_query($conn, $query);

  if ($result === false) {
      // handle the error
      die("Error: " . mysqli_error($conn));
  }

  // Insert the complaint history
  $historyQuery = "INSERT INTO history (complaint_id, status, timestamp) VALUES ($complaintId, 'approved', NOW())";
  $historyResult = mysqli_query($conn, $historyQuery);

  if ($historyResult === false) {
      // handle the error
      die("Error: " . mysqli_error($conn));
  }
}
?>

<main>
  <?php if (isset($row)) : ?>
    <form method="POST">
      <table>
        <tr>
          <th>Nom</th>
          <th>Description</th>
          <th>Status</th>
        </tr>
        <tr>
          <td><?php echo $row['TechRadioName']; ?></td>
          <td><?php echo $row['message']; ?></td>
          <td>
            <input type="hidden" name="complaint_id" value="<?php echo $row['id']; ?>">
            <select name="staff" onchange="this.options[this.selectedIndex].disabled = true;">
              <?php
              // Retrieve the available staff members
              $staffQuery = "SELECT * FROM users where role='biomed'";
              $staffResult = mysqli_query($conn, $staffQuery);

              if ($staffResult === false) {
                  // handle the error
                  die("Error: " . mysqli_error($conn));
              }

              while ($staffRow = mysqli_fetch_assoc($staffResult)) {
                  echo '<option value="' . $staffRow['username'] . '">' . $staffRow['username'] . '</option>';
              }
              ?>
            </select>
            <button type="submit" name="send">Send</button>
          </td>
        </tr>
      </table>
    </form>
  <?php else : ?>
    <p>Complaint not found.</p>
  <?php endif; ?>
</main>

</main>
<style>

    table {
  font-family: Arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 20px;
}

td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #29aac4;
  color: white;
}

h1 {
  text-align: center;
  margin-top: 50px;
  font-size: 36px;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 0 20px;
}

</style>