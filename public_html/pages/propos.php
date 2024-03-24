<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>A propos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/apropos.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
         <!-- Barre de navigation -->
         
         <header>
             <nav class="navbar navbar-inverse custom-navbar" style="background-color: darkred;">
           <div class="container-fluid">
            <div class="navbar-header">
                   <a class="navbar-brand" href="../index.php">
                            <img src="../images/vous.png" alt="Logo"> 
                   </a>
            </div>
               
               <a href="pages/Créercompte.php"><button class="btn btn-white navbar-btn navbar-right" style="margin-right: 12px;">Se connecter</button></a>
               <a href="pages/Compte.php"><button class="btn btn-white navbar-btn navbar-right" style="margin-right: 12px;">S'inscrire </button></a>
             
            <ul class="nav navbar-nav navbar-right"> <!-- Utilisez navbar-right pour aligner les éléments à droite -->
               <li><a href ="../index.php"> Accueil </a></li> 
               <div class="materiels">
         <button class="dropbtn"> Nos matériels 
         <i class="fa fa-caret-down"></i>
    </button>
    <div class="materiels-content">
      <a href ="peinture.php">Peinture</a>
      <a href ="ponçage.php">Ponçage</a>
      <a href ="perforation.php">Perforation</a>
      <a href ="sciage.php">Sciage</a>
      <a href ="nettoyage.php">Nettoyage</a>
      <a href ="soudure.php">Soudure</a>
      <a href ="plomberie.php">Plomberie</a>
      <a href ="pompes.php">Pompes</a>
      <a href ="terrassement.php">Terrassement</a>
    </div>
  </div> 
                <li><a href ="propos.php">A propos</a></li>
                <li><a href ="services.php"> Nos services</a></li>
                <li><a href ="panier.php"><img src="../images/cart.png" style="width: 25px; height: 25px;"></a></li>
                <li><a href ="contact.php" style="margin-right: 12px;" > Contact </a></li> 
            </ul>       
           </div>
        </nav> 
             
         </header>
         <br>
         <h1 style="color: darkred;">A PROPOS</h1>
         
         <h2 style="font-family: Times New Roman; font-style: italic; color : #e74c3c;"> - A propos de nous </h2>
         <p style="padding-left: 40px; padding-right: 30px;">
             Boulanger est le spécialiste des équipements de la maison en électroménager et multimédia. 
             Notre offre de 25 000 références regroupe les indispensables du quotidien.
            Nous mettons tout notre savoir-faire au service de nos clients, 
            grâce à nos marques exclusives et nos nombreux services d’accompagnement comme la livraison dans l’heure à Paris,
            la livraison le lendemain dans toute la France, l’accompagnement 7j/7, la mise en service, le dépannage,
            l’aide à la prise en main à distance ou à domicile, l’abonnement, la location et les offres de produits reconditionnés.
         </p>




         <?php 
       include('../include/footer.php');
       ?>
    </body>
</html>
