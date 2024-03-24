<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Destinataire de l'e-mail (votre adresse e-mail)
    $to = 'nouzhati20@gmail.com';

    // Corps de l'e-mail
    $body = "Nom: $name\n";
    $body .= "Email: $email\n";
    $body .= "Sujet: $subject\n";
    $body .= "Message:\n$message";

    // En-têtes de l'e-mail
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";

    // Envoyer l'e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo '<div style="color:green;">Votre e-mail a été envoyé avec succès.</div>';
    } else {
        echo '<div style="color:red;">Une erreur s\'est produite. Votre e-mail n\'a pas pu être envoyé.</div>';
    }
}
?>
