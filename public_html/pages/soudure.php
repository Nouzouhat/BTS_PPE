<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>Soudure</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="../css/peint.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
            </ul>       
           </div>
        </nav> 
             
         </header>
         
        <h1>Nos locations de Soudure</h1>
   
    <section class="lien">
        <article class="card">
            <img src="../images/soudure.jpg" alt="Avatar" style="width: 300.9px;">
            <h2>POSTE À SOUDER MIG - UNIMIG 250</h2>
            <p class="price"> A partir de 149,99 €/ mois</p>
            <p>Poste de soudure semi-automatique "synergique" monophasé combinant le MIG/MAG, fil fourré et MMA.</p>
            <p><button>Louer le produit</button></p> 
        </article> 
        
        <article class="card">
            <img src="../images/soudure1.png" alt="Avatar" style="width: 300.9px;" >
            <h2>MASQUE RESPIRATOIRE PANTERA TH3 9/13 - SACIT</h2>
            <p class="price"> A partir de 119.99 €/ mois</p>
            <p>Masque de soudure doté d'un système de protection respiratoire à ventilation assistée.</p>
            <p><button>Louer le produit</button></p> 
        </article> 
       
        <article class="card">
            <img src="../images/soudure2.png" alt="Avatar" style="width: 300.9px;">
            <h2>POSTE À SOUDER WELD' LINE MIG 202 - EASYWELD</h2>
            <p class="price"> A partir de 59.99 €/ mois</p>
            <p>Poste de soudage inverter, MMA / MIG-MAG
Utilisation facile pour l'Aluminium, l'Acier, fil fourré et inox.</p>
            <p><button>Louer le produit</button></p> 
        </article>   
        
        <br>
        <br>
         <br>
        <br>
         <br>
        <br>
         <article class="card">
            <img src="../images/soudure2.jpg" alt="Avatar" style="width: 300.9px;">
            <h2>DÉCOUPEUR PLASMA 54 XT COMPRESSEUR - TELWIN</h2>
            <p class="price"> A partir de 189.99 €/ mois</p>
            <p>Système inverter de découpage à air comprimé.
Poste portable, ventilé, avec amorçage de l'arc pilote à contact.</p>
            <p><button>Louer le produit</button></p> 
        </article> 
        
        <article class="card">
            <img src="../images/soudure3.jpg" alt="Avatar" style="width: 300.9px;" >
            <h2>POSTE À SOUDER MIG - MONOMIG 195</h2>
            <p class="price"> A partir de 109.99 €/ mois</p>
            <p>MONOMIG 195 - Monophasé 160A - WUITHOM Poste de soudure  160 Ampères  - MIG/MAG  /  NO-GAZ</p>
            <p><button>Louer le produit</button></p> 
        </article> 
       
        <article class="card">
            <img src="../images/soudure4.png" alt="Avatar" style="width: 300.9px;">
            <h2>POSTE DE SOUDURE PROTIG 201 ALU W</h2>
            <p class="price"> A partir de 399.99 €/ mois</p>
            <p>EASYWELD Poste de soudage TIG Utilisation facile pour tous les métaux y compris l'aluminium.</p>
            <p><button>Louer le produit</button></p> 
        </article>   
    </section>



    <?php 
       include('../include/footer.php');
       ?>
     </body>
</html>
