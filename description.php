<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="style.css?v=1">

    <title>My GMER</title>
    <style>
    </style>
  </head>
  <body onload=" updateStatusColor()">
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
  $query = "SELECT id,TechRadioName, Intitule, message, service, marque, entreprise, email,status from complains WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if ($result === false) {
      // handle the error
      die("Error: " . mysqli_error($conn));
  }
  $row = mysqli_fetch_array($result);
}


if (isset($row)) {
  echo '<form method="POST">';
  echo '<table>';
  echo '<tr><th>Technicien de Radio</th><th> Description</th><th>Status</th></tr>';
  echo '<tr>';
  echo '<td>' . $row['TechRadioName'] . '</td>';
 
 
  echo '<td style="word-break: break-all;
  max-width: 200px;">' . $row['message'] . '</td>';

  echo '<td>';
  echo '<input type="hidden" name="complaint_id_' . $row['id'] . '" value="' . $row['id'] . '">';
  echo '<button type="submit" name="status[' . $row['id'] . ']" value="pending"' . ($row['status'] === 'pending' ? ' style="background-color: yellow;"' : '') . '>Pending</button>';
  echo '<button type="submit" name="status[' . $row['id'] . ']" value="approve"' . ($row['status'] === 'approved' ? ' style="background-color: green;"' : '') . '>Approve</button>';
  echo '<button type="submit" name="status[' . $row['id'] . ']" value="reject"' . ($row['status'] === 'rejected' ? ' style="background-color: red;"' : '') . '>Reject</button>';
  
echo '</td>';
  echo '</tr>';
  echo '</table>';
  echo '</form>';
} else {
  echo 'Complaint not found.';
  header('Location: admin.php');
}


   
    
if (isset($_POST['status'])) {
  foreach ($_POST['status'] as $complaint_id => $status) {
      // Prepare the query
      if ($status === 'reject') {
        $query = "DELETE from complains   WHERE id=$complaint_id ";
          
      } elseif ($status === 'approve') {
          $query = "UPDATE complains SET status='approved'  WHERE id=$complaint_id ";
         
      } else {
        $query = "UPDATE complains SET status='pending', is_notified=0 WHERE id=$complaint_id";
        
      }
      
      // Execute the query
      $result = mysqli_query($conn, $query);
      if ($result === false) {
          // handle the error
          die("Error: " . mysqli_error($conn));
      }

    
  }
}

// Close the database connection
mysqli_close($conn);
?><main>
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
<script>
  function updateStatusColor() {
    var status = "<?php echo $row['status']; ?>";
    var button = document.querySelector('button[name="status"]');

    if (status === 'pending') {
      button.style.backgroundColor = 'yellow';
    } else if (status === 'approved') {
      button.style.backgroundColor = 'green';
    } else if (status === 'rejected') {
      button.style.backgroundColor = 'red';
    }
  }
</script>
