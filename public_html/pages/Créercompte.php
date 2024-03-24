<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPE ROILLE SA</title>
    <link rel="stylesheet" href="../css/creercompte_c.css"/>
    <meta name="description" content="Page d'inscription/connexion"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    <center>
        <h1>Ravie de vous revoir, veuillez vous connecter !</h1>
        <section class="Boite">
            <form action="Créercompte.php" method="POST">
                <label>Qui êtes-vous ?</label>
                <select name='statut'>
                    <option value="Entreprise">Entreprise</option>
                    <option value="Particulier">Particulier</option>
                    <option value="Technicien">Technicien</option>
                </select><br />
                <label><i class="fa-regular fa-envelope"></i>:</label><input type="email" name="mail" required="required" placeholder='Exemple@gmail.com'/><br />
                <label><i class="fa-solid fa-key"></i>:</label><input type="password" name="mot" required="required" /><br />
                <p style="display:none" id="error">Nom ou mot de passe incorrect!</p>
                <button type="submit" name="ok">Se Connecter</button><br>
                <br>
                <a href="../pages/compte.php"><input type="button" value="Créer un compte"></a>
            </form>
            
            <a href="../pages/recuperation.php"><p style ="color : white;">Mot de passe oublié </p></a>
        </section>

    <?php
    $connexion = new PDO('mysql:host=127.0.0.1;dbname=bts_ppe', 'root', '');

    if (!empty($_POST["mot"]) && !empty($_POST["mail"])) {
        $email = htmlspecialchars($_POST["mail"]);
        $mot_passe = htmlspecialchars($_POST["mot"]);
        $statut = htmlspecialchars($_POST["statut"]);

        $req = null;

        if ($statut == "Entreprise") {
            $req = $connexion->prepare("SELECT entreprise.mot_de_passe, entreprise.EMAIL FROM entreprise INNER JOIN client ON client.IDCLIENT = entreprise.IDCLIENT WHERE entreprise.EMAIL=:email");
        } elseif ($statut == "Particulier") {
            $req = $connexion->prepare("SELECT particulier.mot_de_passe, particulier.EMAIL FROM particulier INNER JOIN client ON client.IDCLIENT = particulier.IDCLIENT WHERE particulier.EMAIL=:email");
        } elseif ($statut == "Technicien") {
            $req = $connexion->prepare("SELECT mot_de_passe, email FROM technicien WHERE email=:email");
        }

        $req->bindParam(':email', $email);
        $req->execute();
        $res = $req->fetch(PDO::FETCH_ASSOC);

        if ($res) {
            $mot_passe_hash = $res['mot_de_passe'];
            if (password_verify($mot_passe, $mot_passe_hash)) {
                header('location:http://localhost/bts_ppe/public_html/pages/Connecter.php');
                exit;
            } else {
                echo "<center><aside class='erreur'>
                    <p><i class='fa-solid fa-triangle-exclamation' style='color: #e21246;'></i> <strong>Mots de passe incorrects.</strong> Veuillez réessayer ! </p>
                </aside></center>";
            }
        } else {
            echo "<center><aside class='erreur'>
                <p><i class='fa-solid fa-triangle-exclamation' style='color: #e21246;'></i> Votre email est <strong>introuvable</strong> dans la liste des <strong>$statut</strong> ! </p>
            </aside></center>";
        }
    }
    ?>
          </center>
</body>
</html>

