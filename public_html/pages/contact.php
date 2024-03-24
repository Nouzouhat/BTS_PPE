<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
</head>
<body>
    <h1>Contactez-nous</h1>
    <form id="contact-form" name="contact-form" action="envoyer_email.php" method="POST">
        <input type="text" id="name" name="name" placeholder="Votre nom" required><br>
        <input type="email" id="email" name="email" placeholder="Votre email" required><br>
        <input type="text" id="subject" name="subject" placeholder="Sujet" required><br>
        <textarea id="message" name="message" placeholder="Votre message" required></textarea><br>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
