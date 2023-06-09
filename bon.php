<?php
// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main";

$conn = new mysqli($servername, $username, $password, $dbname);
require('fpdf/fpdf.php');
// Collect form data
$defauts=$_POST['defauts']; 
$client = $_POST['client'];

$date = $_POST['date'];
$heure = $_POST['heure'];
$equipement = $_POST['equipement'];
$marque = $_POST['marque'];
$reference = $_POST['reference'];
$quantite = $_POST['quantite'];

$technicien = $_POST['technicien'];
$details = $_POST['details'];

// Vérifiez si la clé "acheve" existe dans le tableau $_POST
if (isset($_POST['acheve'])) {
    $acheve = $_POST['acheve'];
} else {
    // La clé "acheve" n'existe pas dans le tableau $_POST
    $acheve = ""; // Affectez une valeur par défaut ou affichez un message d'erreur
}




$duree_de = $_POST['duree_de'];
$duree_a = $_POST['duree_a'];

















$pdf = new FPDF();
$pdf->AddPage();

// Add title
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'Bon d intervention', 0, 1, 'C');

// Add client information
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(50, 10, 'Client:', 0, 0);
$pdf->Cell(0, 10, $client, 0, 1);
$pdf->Cell(50, 10, 'Date:', 0, 0);
$pdf->Cell(0, 10, $date, 0, 1);
$pdf->Cell(50, 10, 'Heure:', 0, 0);
$pdf->Cell(0, 10, $heure, 0, 1);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, 'Equipement', 0, 1);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(50, 10, 'Equipement:', 0, 0);
$pdf->Cell(0, 10, $equipement, 0, 1);
$pdf->Cell(50, 10, 'Marque:', 0, 0);
$pdf->Cell(0, 10, $marque, 0, 1);
$pdf->Cell(50,10,'default signales');
$pdf->Cell(0, 10, $defauts, 0, 1);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, 'Details de l intervention', 0, 1);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(50, 10, 'details:', 0, 0);
$pdf->MultiCell(0, 10, $details, 0);
$pdf->Cell(50, 10, 'Acheve:', 0, 0);
$pdf->Cell(0, 10, $acheve, 0, 1);
$pdf->Cell(50, 10, 'Duree de l intervention de:', 0, 0);
$pdf->Cell(0, 10, $duree_de.' a '.$duree_a, 0, 1);
$pdf->Cell(50, 10, 'reference:', 0, 0);
$pdf->Cell(0, 10, $reference, 0, 1);
$pdf->Cell(50, 10, 'quantite:', 0, 0);
$pdf->Cell(0, 10, $quantite, 0, 1);
$pdf->Cell(50, 10, 'Intervention:', 0, 0);
$pdf->Cell(0, 10, $technicien, 0, 1);
$pdf->Output('I', 'bon dintervention.pdf');




  








// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert the form data into the database
$sql = "INSERT INTO intervention ( date , heure, client, equipement, marque, defauts,   acheve_oui, cle_reference,cle_quantite, technicien_radioyuji
)
VALUES ( '$date', '$heure', '$client', '$equipement', '$marque', '$defauts','$acheve', '$reference',  '$quantite', '$technicien')";

if ($conn->query($sql) === TRUE) {
    echo "Intervention enregistrée avec succès!";
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
