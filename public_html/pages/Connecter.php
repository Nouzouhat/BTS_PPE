<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <title>PPE ROILLE SA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/index.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .materiels {
  float: left;
  overflow: hidden;
}

.materiels .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.materiels-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.materiels-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.materiels-content a:hover {
  background-color: #ddd;
}

.materiels:hover .materiels-content {
  display: block;
}

.welcome-text {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
                color: white; /* Couleur du texte */
                font-family: 'Times New Roman', serif; /* Police du texte */
                font-style: italic; /* Texte en italique */
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Ombre du texte */
                font-size:49px; /* Taille du texte */
                font-weight: bold; /* Style de police du texte */
            }
        </style>
    </head>
     <body Onload="alert('Vous êtes connecté(e)');">
         <header>
        <nav class="navbar navbar-inverse custom-navbar">
           <div class="container-fluid">
            <div class="navbar-header">
                   <a class="navbar-brand" href="../index.php">
                            <img src="../images/vous.png" alt="Logo"> 
                   </a>
            </div>
                 
            <ul class="nav navbar-nav navbar-right"> <!-- Utilisez navbar-right pour aligner les éléments à droite -->
              
                <li><a href ="index.php"> Accueil </a></li> 
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
                <li><a href ="contact.php" style="margin-right: 12px;" > Contact </a></li> 
                  <li><a href ="panier.php"><img src="../images/cart.png" style="width: 25px; height: 25px;"></a></li>
                <li><a href="Créercompte.php"><img src="../images/user.png" style="width: 25px; height: 25px;"></a></li>
                <li><a href="../index.php"><img src="../images/logout.png" style="width: 25px; height: 25px;"></a><li>
            </ul>       
               
           </div>
        </nav>
       
         </header>
         <div class="welcome-text">
            <p>BIENVENUE DANS NOTRE SITE</p>
        </div> 
        <img class="custom-image" src="../images/fo.jpg" alt="Your Image">
  
     
</body>
</html>
        
