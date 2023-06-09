<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'main');

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the complaint history from the database
$query = "SELECT c.TechRadioName,  c.message, h.status, h.timestamp 
          FROM complains c 
          INNER JOIN history h ON c.id = h.complaint_id 
          ORDER BY h.timestamp DESC";
$result = mysqli_query($conn, $query);
if ($result === false) {
    // handle the error
    die("Error: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
    <title>Complaint History</title>
    <style>
        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            background-color:#f2f2f2;
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
</head>
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
<body>
    <main>
<div class="container">
    <h1>Complaint History</h1>
    <?php if (mysqli_num_rows($result) > 0): ?>
        <table>
            <tr>
                <th>Technicien</th>
             
                <th>Description</th>
                <th>Status</th>
                <th>Timestamp</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['TechRadioName']; ?></td>
                 
                    <td><?php echo $row['message']; ?></td>
                    <td><?php echo ucfirst($row['status']); ?></td>
                    <td><?php echo date('M j, Y g:i A', strtotime($row['timestamp'])); ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>No complaints found.</p>
    <?php endif; ?>
</div>
    </main>
</body>
</html>

<?php
// Close the database connection
mysqli_close($conn);
?>