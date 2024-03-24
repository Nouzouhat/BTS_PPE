<?php
session_start();
$connexion = new PDO('mysql:host=127.0.0.1;dbname=bts_ppe', 'root', '');
$connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$panier = $connexion->prepare("select *, count(*) as nbre_article from panier");
$panier -> execute();
$panier = $panier->fetch();
$_SESSION['nbre_article'] = htmlspecialchars($panier['nbre_article']);    
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->

<html>
    <head>
        <title>Peinture</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="../css/peint.css" />
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



            <div class="materiels">
         <button class="dropbtn"> Nos services 
         <i class="fa fa-caret-down"></i>
    </button> 
    <div class="materiels-content">
      <a style="color: black;" href ="devis.php">Demander un devis</a>
      <a style="color: black;" href ="faq.php">FAQ</a>
    </div>
  </div> 
                <li><a href ="propos.php">A propos</a></li>
                 <li><a href ="contact.php" style="margin-right: 12px;" > Contact </a></li> 
                 <?php echo "<li><a href ='panier.php'><img src='../images/cart.png' style='width: 25px; height: 25px;'>",$_SESSION['nbre_article'],"</a></li>" ?>
                <li><a href="pages/Créercompte.php"><img src="../images/user.png" style="width: 25px; height: 25px;"></a></li>
            </ul>       
           </div>
        </nav> 
             
         </header>
         
         
         <h1 style=" color: darkred; text-align: center; font-size : 40px; font-family: georgia;">Nos locations de Peinture</h1>
         <br>
    </body>
 <section class="lien">
    <!---------------------------Articles--------------------------------->
    <form action="panier.php" method="POST">
            <img src="../images/brosse.png" alt="Avatar" style="width: 300.9px;">
            <h2>Couteau à Enduire</h2>
            <label class="price"> A partir de 30.99 €/ mois</label>
            <p>c'est un couteau blabla</p>
             <input type="text" name="ID" value="INE1">
            <input type="submit" name="article1"value="Louer le produit">
        
    </form>

    <form action="panier.php" method="POST">
            <img src="../images/pack.png" alt="Avatar" style="width: 300.9px;" >
            <h2>Couteau à Enduire</h2>
            <label class="price"> A partir de 30.99 €/ mois</label>
            <p>c'est un couteau blabla</p>
             <input type="text" name="ID" value="INE2">
            <input type="submit" name="article2" value="Louer le produit"> 
    </form>

    <form action="panier.php" method="POST">
            <img src="../images/brosse1.png" alt="Avatar" style="width: 300.9px;">
            <h2>Couteau à Enduire</h2>
            <label class="price"> A partir de 30.99 €/ mois</label>
            <p>c'est un couteau blabla</p>
             <input type="text" name="ID" value="INE3">
            <input type="submit" name="article3" value="Louer le produit">  
        </form>  
        
        <br>
        <br>
         <br>
        <br>
         <br>
        <br>

    <form action="panier.php" method="POST">
            <img src="../images/brosserectangle.png" alt="Avatar" style="width: 300.9px;">
            <h2>Couteau à Enduire</h2>
            <label class="price" > A partir de 30.99 €/ mois</label>
            <p>c'est un couteau blabla</p>
             <input type="text" name="ID" value="INE4">
            <input type="submit" name="article4"value="Louer le produit"> 
    </form>

     <form action="panier.php" method="POST">
            <img src="../images/peintre.png" alt="Avatar" style="width: 300.9px;" >
            <h2>Couteau à Enduire</h2>
           <label class="price" > A partir de 30.99 €/ mois</label>
            <p>c'est un couteau blabla</p>
            <input type="text" name="ID" value="INE5">
            <input type="submit"  value="Louer le produit">  
    </form>

    <form action="panier.php" method="POST">   
            <img src="../images/badasse.jpg" alt="Avatar" style="width: 300.9px;"> 
            <h2>Couteau à Enduire</h2>
            <label class="price"> A partir de 30.99 €/ mois</label>
            <p>c'est un couteau blabla</p>
            <input type="text"  name="ID" value="INE6">
           <input type="submit"  value="Louer le produit"> 
    </form>  
   <!--------------------------------------------------------------------------->
</section>
   

   
   <?php 
       include('../include/footer.php');
       ?>
</body>



</html>
