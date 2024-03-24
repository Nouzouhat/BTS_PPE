<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de passe oublié</title>
    <!-- Inclure les liens vers les styles CSS et les scripts nécessaires -->
</head>
<body>
    <center>
        <h1>Mot de passe oublié</h1>
        <section class="Boite">
            <form action="MotDePasseOublie.php" method="POST">
                <label>Email :</label>
                <input type="email" name="email" required="required" placeholder="Votre adresse email"/><br />
                <br>
                <button type="submit" name="reset">Réinitialiser le mot de passe</button><br>
            </form>
        </section>
    </center>
</body>
</html>

<?php
// ...

if (!empty($_POST['statut'])) {
    $statut = htmlspecialchars($_POST['statut']);

    if ($statut == "E") {
         if ($statut == "E"){
             // E comme entreprise//
                 //Valeurs de l'entreprise//
                $nom = htmlspecialchars($_POST["nom_entreprise"]);
                $siret = htmlspecialchars($_POST["siret"]);
                $adresse = htmlspecialchars($_POST["adresse_entreprise"]);
                $tel = htmlspecialchars($_POST["tel_entreprise"]);
                $email = htmlspecialchars($_POST["email_entreprise"]);
                $ville = htmlspecialchars($_POST["ville_entreprise"]);
                $mot = password_hash(htmlspecialchars($_POST["motdepasse"]), PASSWORD_DEFAULT);
                $cp = htmlspecialchars($_POST["cp_entreprise"]);
                $contact =  htmlspecialchars($_POST["contact"]);
                $nouz = "insert into entreprise(NUM_SIRET, NOM_OU_RAISON_SOCIAL,CONTACT, nom, EMAIL, ADRESSE, CP, ville, TELEPHONE, mot_de_passe)"
	        ." values ('$siret', '$nom', '$contact', '$nom', '$email', '$adresse', '$cp', '$ville', '$tel', '$mot') ";
                
                $connexion -> exec($nouz);
               
        
        }
        $email_entreprise = htmlspecialchars($_POST["email_entreprise"]);

        // Vérifier si l'email existe déjà dans la base de données
        $verificationEmail = $connexion->prepare("SELECT COUNT(*) FROM entreprise WHERE EMAIL = ?");
        $verificationEmail->execute([$email_entreprise]);
        $emailExists = $verificationEmail->fetchColumn();

        if ($emailExists) {
            echo "<center><aside class='error'>
                  <p><i class='fa-solid fa-exclamation-triangle fa-xs' style='color: #FF0000;'></i> L'adresse email de l'entreprise existe déjà. Veuillez en choisir une autre.</p>
                  </aside> </center>";
        } else {
            // ... (votre code pour l'insertion des données de l'entreprise)
        }
    } else if ($statut == "P") {
        // ... (votre code pour le statut "P" comme particulier)

        // Vérification de l'adresse email
        $email_particulier = htmlspecialchars($_POST["email"]);

        // Vérifier si l'email existe déjà dans la base de données
        $verificationEmail = $connexion->prepare("SELECT COUNT(*) FROM particulier WHERE EMAIL = ?");
        $verificationEmail->execute([$email_particulier]);
        $emailExists = $verificationEmail->fetchColumn();

        if ($emailExists) {
            echo "<center><aside class='error'>
                  <p><i class='fa-solid fa-exclamation-triangle fa-xs' style='color: #FF0000;'></i> L'adresse email du particulier existe déjà. Veuillez en choisir une autre.</p>
                  </aside> </center>";
        } else {
            // ... (votre code pour l'insertion des données du particulier)
        }
    }
}

// ...
?>

    </body>
</html>
