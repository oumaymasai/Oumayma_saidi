<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-6.8.0/src/PHPMailer.php';
require "PHPMailer-6.8.0\src\SMTP.php";
require 'PHPMailer-6.8.0\src\Exception.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

// SMTP configuration
$mail->isSMTP();
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'oumaymasaidi255@gmail.com';
$mail->Password   = 'ouma1717+';
$mail->SMTPSecure = 'tls';
$mail->Port       = 587;

// Sender and recipient settings
$mail->setFrom('oumaymasaidi255@gmail.com', 'Oumayma');
$mail->addAddress('oumaymasaidi255@gmail.com', 'Oumayma');

// Email content
$mail->isHTML(true);
$mail->Subject = 'Test de messagerie';
$mail->Body    = 'Nom : ' . $name . '<br> Adresse e-mail : ' . $email . '<br> Telephone : ' . $phone . '<br> Objet : ' . $subject . '<br> Message : ' . $message . '<br>';

// Send the email and handle any exceptions
try {
    $mail->send();
    echo "Votre message a été envoyé avec succès.";
} catch (Exception $e) {
    echo "Une erreur est survenue lors de l'envoi de votre message : " . $mail->ErrorInfo;
}