<?php 
session_start();
/****************************************************************************************************************/

$connexion = new PDO('mysql:host=127.0.0.1;dbname=bts_ppe', 'root', '');
$connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 if(isset($_POST["ID"])) { 

    $iD = substr($_POST['ID'], 3);


    /****************************************************************************/
    $resultat_materiel = $connexion->prepare("select * from materiel where IDMATERIEL=:iD");
    $resultat_materiel ->bindParam(':iD',$iD);
    $resultat_materiel -> execute();
    $type_resultat = $resultat_materiel->fetch(PDO::FETCH_ASSOC);
    /****************************************************************************/



    /*****************************************************************************/
    $etat_panier = $connexion->query("select count(*) from panier");
    $nbre_panier = $etat_panier->fetch();
    /******************************************************************************/


    
    if($type_resultat)
    {
        if($nbre_panier[0] == 0)
        {
            //Si c'est la première commande
         $montant =$type_resultat['MONTANT'];
         $image = $type_resultat['IMAGE'];
         $nom = $type_resultat['NOM'];
         $req_insert_panier = "insert into panier(IDMATERIEL, NBRE_ARTICLE, MONTANT_TOTAL, IMAGE, NOM)" 
        ."values('$iD',1, '$montant', '$image', '$nom')"; 
         $connexion-> exec($req_insert_panier);
         }
        else{
        //Sinon
            

        /*******************************************************************/
          $liste_ID = $connexion->prepare("select * from panier where IDMATERIEL=$iD");//Récupère les éléments présents dans le panier
          $liste_ID -> execute();
          $liste_ID = $liste_ID->fetch(PDO::FETCH_ASSOC);
        /*******************************************************************/

            $montant =  floatval($type_resultat['MONTANT']);

            if($liste_ID && in_array($iD, $liste_ID)){
                //Si l'article est déjà dans le panier, il sera mis à jour
                $fact = (floatval($liste_ID['MONTANT_TOTAL']/$montant)) + 1; // Rapport entre le prix dans le panier et le prix unitaire
                $nouveau_montant = $montant+$montant*($fact-1); // Calcule le nouveau montant
                $req_update = "update panier SET MONTANT_TOTAL=$nouveau_montant, NBRE_ARTICLE=$fact WHERE IDMATERIEL='$iD'";
                $connexion -> exec($req_update);
                 }
        
            else{
            //Sinon 
             $montant =$type_resultat['MONTANT'];
             $image = $type_resultat['IMAGE'];
             $nom = $type_resultat['NOM'];
            $req_insert_panier = "insert into panier(IDMATERIEL, NBRE_ARTICLE, MONTANT_TOTAL,IMAGE, NOM)" 
            ."values('$iD','1', '$montant', '$image', '$nom')";
            $connexion-> exec($req_insert_panier);
}
            } 
        } 

}
/******************Modifications du panier****************************/

      /************** Supression d'un article ************/
function Supprimer_Artcle($id){
  " int -> None";
           $rqt = $GLOBALS['connexion'] ->prepare("delete from panier where IDPANIER=$id"); 
           $rqt -> execute();
           /*****Réinitialisation des IDPANIER*****/
                $effacer =  $GLOBALS['connexion'] ->prepare("alter table panier drop column IDPANIER;");// Efface la colonne idpanier 
               $ajouter =  $GLOBALS['connexion'] ->prepare("alter table panier add IDPANIER int not null primary key auto_increment first; "); //ajouter la colonne idpanier
               $effacer -> execute();
               $ajouter -> execute();
               unset($GLOBALS['dict_artc'][$id]); // Efface l'élément du panier
               $_SESSION['nbre_article'] -= 1;

}

if(isset($_GET['supprimer'])){
  Supprimer_Artcle($_GET['supprimer']);
           }

           /*************  Ajout et diminution *************/

function AJt_Artcle($id){
  "int -> None"; 
   $rqt = $GLOBALS['connexion']->prepare("update panier set NBRE_ARTICLE= NBRE_ARTICLE + 1 where IDPANIER=$id");
   $rqt -> execute();

}
function Rduir_Artcle($id){
  "int -> None"; 
   $rqt = $GLOBALS['connexion']->prepare("update panier set NBRE_ARTICLE= NBRE_ARTICLE- 1 where IDPANIER=$id");
   $rqt -> execute();
   $nbre_article = $GLOBALS['connexion']->prepare("select NBRE_ARTICLE from panier where IDPANIER=$id");
   $nbre_article -> execute();
   $nbre_article = $nbre_article->fetch();
    if($nbre_article['NBRE_ARTICLE'] == 0) {
      try {
        Supprimer_Artcle($id);
      } catch (Exception $e) {
         echo "Désolé une erreur est survenue ! Veuillez réessayer !";
         echo $e;
      }
      
    }

   
}

if(isset($_GET['plus'])){
  AJt_Artcle($_GET['plus']);
}
if(isset($_GET['moins'])){
  Rduir_Artcle($_GET['moins']);
}
      
  
/*************** Stockage du panier dans un dictionnaire ******************/

$panier = $connexion->prepare("select *, count(*) as nbre_article from panier");
$panier -> execute();
$panier = $panier->fetch();
$_SESSION['nbre_article'] = htmlspecialchars($panier['nbre_article']);

/***************************************************************************/
$dict_artc = array();

if ($_SESSION['nbre_article'] > 0) {
  $id_pan = $connexion ->prepare("select IDPANIER from panier");
  $id_pan -> execute();
  $id_pan = $id_pan -> fetch(PDO::FETCH_ASSOC);
  $a = intval($id_pan['IDPANIER']); // Est assigné le id_panier le plus petit 
  $b = $a + intval($panier['nbre_article']); // Est assigné le id_panier le plus grand
  //[a, b[ est l'intervalle des ID_PANIER
 
 for ($i=$a; $i < $b ; $i++) {

      $artc = $connexion->prepare("select * from panier where IDPANIER='$i'");
      $artc -> execute();
      $artc = $artc->fetch(PDO::FETCH_ASSOC);
      $id_mat = intval($artc['IDMATERIEL']);
      $nom = htmlspecialchars($artc['NOM']);
      $montant_tot = floatval($artc['MONTANT_TOTAL']);
      $nbre_art = intval($artc['NBRE_ARTICLE']);
      $img = htmlspecialchars($artc['IMAGE']);
      $dict_artc[$i] = array('IDARTICLE' => $i, 'NOM' =>$nom, 'IDMATERIEL' => $id_mat, 'NBRE_ARTICLE' => $nbre_art,'MONTANT_TOTAL'=> $montant_tot, 'IMG' =>$img);// Panier
      
}
}
?>
 



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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <style>
            @media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}

span a {
  text-decoration: none;

}

</style>
    </head>
    <body>
      
       <section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">

            <div class="row">

              <div class="col-lg-7">
                <h5 class="mb-3"><a href ="peinture.php"><i
                      class="fas fa-long-arrow-alt-left me-2"></i>Continuer vos achats</a></h5>
                <hr>

                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <p class="mb-1">Mon panier </p>
                    <p class="mb-0"><?php 
                    $panier = $connexion->prepare("select *, count(*) as nbre_article from panier");
                    $panier -> execute();
                     $panier = $panier->fetch();
                     if($panier['nbre_article'] <= 1){
                      echo "<p>Vous avez ",$panier['nbre_article'] ," produit dans votre panier </p>"; 
                     }
                     else{
                      echo "<p>Vous avez ",$panier['nbre_article'] ," produits dans votre panier </p>";
                     }
                      ?> 
                   </p>
                  </div>
                  
                </div>
       <!-----------------------------------PANIER---------------------------------------------->
       <?php


        /*********************Affichage******************************/
        $montant_tot = 0 ;// Représente le montant total à afficher
       if(count($dict_artc) > 0){ //Si le panier n'est pas vide
        

        foreach ($dict_artc as $sous_liste) {
            $id_article = $sous_liste['IDARTICLE'];
            $img = $sous_liste['IMG'];
            $nom = $sous_liste['NOM'];
            $nbre_art = $sous_liste['NBRE_ARTICLE'];
            $montant_unit = floatval($sous_liste['MONTANT_TOTAL']); // prix unitaire
            $montant_tot += $montant_unit*$nbre_art;
            echo "<article style='box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;' id ='$id_article'>"
                ."<img src=$img width='100px' height='100px'/>"
                ."<span><strong>$nom</strong></span>"
                ."<span id='icones'><a href='panier.php?supprimer=$id_article' onclick='retirer($id_article)' style='margin-left:50px;'><i class='fa-solid fa-trash-arrow-up fa-l' style='color: #ff0000; font-size:20px; cursor:pointer;'></i></a>"
                ."</span><span><a href='panier.php?plus=$id_article'><i class='fa-solid fa-caret-up fa-lg' style='color: #63E6BE;'></i></a>
                 <a href='panier.php?moins=$id_article'><i class='fa-solid fa-caret-down fa-lg' style='color: #ff0000;''></i></a></span>"
                ."<span style='font-size:12px;'>x$nbre_art Unitaire = <strong> $montant_unit €</strong></span>"
                 ."</article>"
                  ."<br />";
                  
         }

       }
        ?>
 <!-------------------------------PAIEMENT---------------------------------------------->      
              <div class="col-lg-5" style=" margin-top: -297px; margin-left: 700px; width: 420px;">

                <div class="card bg-primary text-white rounded-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h5 class="mb-0">Details du carte</h5>
                      <img src="../images/sciage.jpg"
                        class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
                    </div>

                    <p class="small mb-2">Type de carte </p>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-visa fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i
                        class="fab fa-cc-amex fa-2x me-2"></i></a>
                    <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>

                    <form class="mt-4">
                      <div class="form-outline form-white mb-4">
                        <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                          placeholder="Nom du titulaire de la carte" />
                        <label class="form-label" for="typeName">Nom sur la carte </label>
                      </div>

                      <div class="form-outline form-white mb-4">
                        <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                          placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                        <label class="form-label" for="typeText">Numèro de carte </label>
                      </div>

                      <div class="row mb-4">
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <input type="text" id="typeExp" class="form-control form-control-lg"
                              placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                            <label class="form-label" for="typeExp">Date d'expiration</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <input type="password" id="typeText" class="form-control form-control-lg"
                              placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                            <label class="form-label" for="typeText">CVV</label>
                          </div>
                        </div>
                      </div>

                    </form>

                    <hr class="my-4">

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Total</p>
                      <p class="mb-2"><?php echo "$montant_tot €";
                       ?></p>
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">expédition</p>
                      <p class="mb-2"><?php 
                      $expedition = 10;
                      $nbre_art = intval($panier['nbre_article']);
                      $expedition = $expedition * $nbre_art;
                      echo "$expedition €";
                        ?></p>
                    </div>

                    <div class="d-flex justify-content-between mb-4">
                      <p class="mb-2">Total(Incl. taxes)</p>
                      <p class="mb-2"><?php
                      $montant_tot = $montant_tot + ($expedition * $nbre_art );
                      echo "$montant_tot €";
                    ?></p>
                    </div>

                    <button type="button" class="btn btn-info btn-block btn-lg">
                      <div class="d-flex justify-content-between">
                        <span><?php
                      $montant_tot = $montant_tot + ($expedition * $nbre_art );
                      echo "$montant_tot €";

                      ?></span>
                        <span>vérifier <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                      </div>
                    </button>

                  </div>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <?php 
       include('../include/footer.php');
       ?>
    </body>
  
</html>

