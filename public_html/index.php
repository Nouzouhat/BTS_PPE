<?php
$connexion = new PDO('mysql:host=127.0.0.1;dbname=bts_ppe', 'root', '');
$connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$panier = $connexion->prepare("select *, count(*) as nbre_article from panier");
$panier -> execute();
$panier = $panier->fetch();
$_SESSION['nbre_article'] = htmlspecialchars($panier['nbre_article']);   
?>

<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <title>PPE ROILLE SA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/index.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    <body>
         <header>
             <nav class="navbar navbar-inverse custom-navbar" style="background-color: darkred;">
           <div class="container-fluid">
            <div class="navbar-header">
                   <a class="navbar-brand" href="index.php">
                            <img src="images/logo.png" alt="Logo"> 
                   </a>
            </div>
               
          
            <ul class="nav navbar-nav navbar-right"> <!-- Utilisez navbar-right pour aligner les éléments à droite -->
               <li><a href ="index.php"> Accueil </a></li> 
               <div class="materiels">
         <button class="dropbtn"> Nos matériels 
         <i class="fa fa-caret-down"></i>
    </button>
    <div class="materiels-content">
      <a style="color: black;" href ="pages/peinture.php">Peinture</a>
      <a style="color: black;" href ="pages/ponçage.php">Ponçage</a>
      <a style="color: black;" href ="pages/perforation.php">Perforation</a>
      <a style="color: black;" href ="pages/sciage.php">Sciage</a>
      <a style="color: black;" href ="pages/nettoyage.php">Nettoyage</a>
      <a style="color: black;" href ="pages/soudure.php">Soudure</a>
      <a style="color: black;" href ="pages/plomberie.php">Plomberie</a>
      <a style="color: black;" href ="pages/pompes.php">Pompes</a>
      <a style="color: black;" href ="pages/terrassement.php">Terrassement</a>
    </div>
  </div> 



            <div class="materiels">
         <button class="dropbtn"> Nos services 
         <i class="fa fa-caret-down"></i>
    </button>
    <div class="materiels-content">
      <a style="color: black;" href ="pages/devis.php">Demander un devis</a>
      <a style="color: black;" href ="pages/faq.php">FAQ</a>
    </div>
  </div> 


                <li><a href ="pages/propos.php">A propos</a></li>
                <li><a href ="pages/contact.php" style="margin-right: 12px;" > Contact </a></li> 
                  <?php echo "<li><a href ='./pages/panier.php'><img src='./images/cart.png' style='width: 25px; height: 25px;'>",$_SESSION['nbre_article'],"</a></li>" ?>
                <li><a href="pages/Créercompte.php"><img src="./images/user.png" style="width: 25px; height: 25px;"></a></li>
            </ul>       
           </div>
        </nav> 
             
         </header>
         <div class="welcome-text">
            <p>BIENVENUE DANS NOTRE SITE</p>
        </div> 
        
        <img class="custom-image" src="./images/fo.jpg" alt="Your Image">
        
     <center>
            <section class="icone">
                <div>
                    <img src="./images/rent.png" alt="Rent Image">
                    <h1 style="font-size:20px; font-weight: bold;"> LOCATION</h1>
                    <p>Notre équipe dédiée à la location de matériel de construction vise l'excellence à la fois dans la qualité de nos équipements et dans l'interaction avec vous.</p>
                </div>
                <div>
                    <img src="./images/dependable.png" alt="Dependable Image">
                    <h1 style="font-size:20px; font-weight: bold;"> CONFIANCE</h1>
                    <p>Notre équipe dédiée à la location de matériel de construction vise l'excellence à la fois dans la qualité de nos équipements et dans l'interaction avec vous.</p>
                </div>
                <div>
                    <img src="./images/truck.png" alt="Truck Image">
                    <h1 style="font-size:20px;font-weight: bold;"> LIVRAISON </h1>
                    <p>Notre équipe dédiée à la location de matériel de construction vise l'excellence à la fois dans la qualité de nos équipements et dans l'interaction avec vous.</p>
                </div>
                <div>
                    <img src="./images/insurance.png" alt="Insurance Image">
                    <h1 style="font-size:20px;font-weight: bold;"> PAIEMENT SECURISE</h1>
                    <p>Notre équipe dédiée à la location de matériel de construction vise l'excellence à la fois dans la qualité de nos équipements et dans l'interaction avec vous.</p>
                </div>
            </section>
        </center>
    <br>
    <br>
    <br>
    <h1 style="text-align: center; font-size: 45px; color: darkred; font-family: 'Times New Roman', serif; /* Police du texte */
                font-style: italic;"> A PROPOS </h1>
         <br>
    <br>
   
    <section class="pre-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="./images/con.jpg" style="height: 300px; width: 500px;" alt="Description de la photo">
            </div>
            <div class="col-md-6">
                <p>Bienvenue chez Roille Roise, votre partenaire de confiance dans le secteur de la construction. 
                    Forts de nombreuses années d'expérience, nous nous engageons à faciliter vos projets de construction en mettant à votre disposition une vaste gamme de matériel de construction de haute qualité.
                    Que vous soyez une entreprise du bâtiment, un entrepreneur indépendant ou un particulier ambitieux, notre entreprise dédiée à la location de matériel offre des solutions adaptées à tous.
                    Chez Roille Roise, nous comprenons l'importance d'avoir accès aux bons outils pour mener à bien votre projet. 
                    Notre flotte diversifiée de matériel de construction, allant des équipements de peinture et de ponçage aux machines de terrassement et de soudure, est régulièrement entretenue et mise à jour pour garantir des performances optimales.
                    Notre équipe compétente et dévouée est là pour vous conseiller et vous fournir le matériel nécessaire, quel que soit le type de travaux que vous entreprenez.</p>
            </div>
        </div>
    </div>
</section>
    
      <br>
    <br>
          <?php 
       include('./include/footer.php');
       ?>
        
</body>
</html>
        
