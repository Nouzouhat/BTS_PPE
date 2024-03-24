<!DOCTYPE html>
<html>
<head>
    <title>PPE ROILLE SA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/compte_c.css"/>
    <meta name="description" content="page d'inscription"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script src="../javascript/compte.js"></script>
</head>
<body>
<header>
</header>
       
        <center>
            <form Id="inscription" action="compte.php" method="POST">
               
        <section class="Boite" style="box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset; ">
            <center>
            <section class='données'>
                 
                <label style="color: white; font-size:2em;">Vous êtes ?</label>
                <select  name="statut" required="required" onchange="inscription(this.value)"> 
                    <option value ="P">Particulier</option>
                    <option value="E" > Entreprise</option>
                   
                </select>
                   <br />
                   <br />
                   <center>
                  <section class="entreprise">
            <label style="color: white; font-weight: bold; font-size: 20px;"><i class="fa-regular fa-user"></i> :</label><input type="text" Id="name" name="nom_entreprise"  placeholder="Entrer votre nom (ou raison social)" pattern="[A-Z]+"/><br>
            <label style="color: white; font-weight: bold; font-size: 20px;"><i class="fa-solid fa-list-ol fa-xs" style="color: #f9fafa;"></i>:</label><input type="text" name="siret"  placeholder='Numéro de siret' /><br>
            <label style="color: white; font-weight: bold; font-size: 20px;"><i class="fa-solid fa-house"></i> :</label><input type="text"  name="contact"  placeholder="Entrer votre contact" /><br>
            <label style="color: white; font-weight: bold; font-size: 20px;"><i class="fa-solid fa-house"></i> :</label><input type="text" Id="ville" name="ville_entreprise"  placeholder="Ville" /><br>
             <label style="color: white; font-weight: bold; font-size: 20px;"><i class="fa-solid fa-list-ol fa-xs" style="color: #f9fafa;"></i>:</label><input type="text" name="cp_entreprise"  placeholder='CP' /><br>
            <label style="color: white; font-weight: bold; font-size: 20px;"><i class="fa-regular fa-envelope"></i> :</label><input type="email" name="email_entreprise" Id="mail"  placeholder='entreprise@gmail.com'/><br>
            <label style="color: white; font-weight: bold; font-size: 20px;"><i class="fa-solid fa-house"></i> :</label><input type="text" Id="adresse" name="adresse_entreprise" placeholder="Entrer votre adresse physique" /><br>
            <label style="color: white; font-weight: bold; font-size: 20px;"><i class="fa-solid fa-phone"></i> :</label><input type="tel" name="tel_entreprise"  placeholder='Numéro de téléphone' /><br>
            <label style="color: white; font-weight: bold; font-size: 20px;"><i class="fa-solid fa-key"></i> :</label><input type="password" name="motdepasse" Id="password"  min="8" /><br>
            
                      
                      
                  </section>
                       <section class="particulier">
            <label style="color: white; font-weight: bold; font-size: 20px;"><i class="fa-regular fa-user"></i> :</label><input type="text" Id="name" name ="nom"  placeholder="Entrer votre nom" pattern="[A-Z]+"/><br>
            <label style="color: white; font-weight: bold; font-size: 20px;"><i class="fa-regular fa-user"></i> :</label><input type="text" Id="name" name ="prenom"  placeholder="Entrer votre Prenom"/><br>
            <label style="color: white; font-weight: bold; font-size: 20px;"><i class="fa-regular fa-envelope"></i> :</label><input type="email" name="email" Id="mail" placeholder='nom@gmail.com'/><br>
            <label style="color: white; font-weight: bold; font-size: 20px;"><i class="fa-solid fa-house"></i> :</label><input type="text" Id="adresse" name="adresse" placeholder="Entrer votre adresse physique" /><br>
            <label style="color: white; font-weight: bold; font-size: 20px;"><i class="fa-solid fa-house"></i> :</label><input type="text" Id="ville" name="ville"  placeholder="Ville" /><br>
             <label style="color: white; font-weight: bold; font-size: 20px;"><i class="fa-solid fa-list-ol fa-xs" style="color: #f9fafa;"></i>:</label><input type="text" name="cp"  placeholder='CP' /><br>
            <label style="color: white; font-weight: bold; font-size: 20px;"><i class="fa-solid fa-phone"></i> :</label><input type="tel" name="tel"  placeholder='Numéro de téléphone' /><br>
            <label style="color: white; font-weight: bold; font-size: 20px;"><i class="fa-solid fa-key"></i> :</label><input type="password" name="motdepasse" Id="password" min="8"  /><br />
                </section>
                  
                </center>
                   <input type="submit" value="Valider" Id="val" style="width:100px;  font-weight: bold; padding-top:5px"/><br />
                <input type="reset" value="Supprimer" style="width:200px; height: 31px;   font-weight: bold; padding-top:5px;">
                  </section>
             </center>
        </section>
            
               
        </section>
              
</form> 
           </center> 
            <script src="../javascript/compte.js"></script> 
            
            <center>
            <div id="message">
                <h3>Le mot de passe doit contenir les élements suivants</h3>
                <p id="letter" class="invalid">une lettre minuscule</p>
                <p id="capital" class="invalid">une lettre majuscule</p>
                <p id="number" class="invalid">un chiffre</p>
                <p id="length" class="invalid">8 caractères minimum</p>
            </div>
            </center>
            
      <?php 
    $connexion = new PDO('mysql:host=127.0.0.1;dbname=bts_ppe', 'root', '');
    $connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
       
    
    //echo 'Je suis '.$nom." ".$prenom." : ".$tel. " ". $email. " : ". $mot;//
    if(!empty($_POST['statut'])){
        $statut = htmlspecialchars($_POST['statut']);
      
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
                
              if($connexion){
                    echo "<center><aside class='succe'>
        <p><i class='fa-solid fa-check fa-bounce fa-xs' style='color: #63E6BE;'></i> <strong>Vous êtes bien enrégistré(e) ! </strong> Veuillez cliquer <a href='Connecter.php'>ici</a> pour vous connecter dans votre <strong>espace</strong> ! </p>
        
    </aside> </center>";
              
              }
        
        }
    ////////////////////////////////////////////////////////////////////////
        else if ($statut == "P")
        {
//P comme particulier//
        
               
                 //Valeurs pour un particulier//
                $nom = htmlspecialchars($_POST["nom"]);
                $prenom = htmlspecialchars($_POST["prenom"]);
    
                $adresse= htmlspecialchars($_POST["adresse"]);
                $tel = htmlspecialchars($_POST["tel"]);
                $email = htmlspecialchars($_POST["email"]);
                $ville = htmlspecialchars($_POST["ville"]);
                $mot = password_hash(htmlspecialchars($_POST["motdepasse"]), PASSWORD_DEFAULT);
                $cp = htmlspecialchars($_POST["cp"]);
                $nouz = "insert into particulier (NOM, PRENOM, EMAIL, mot_de_passe, TELEPHONE, ADRESSE,  CP, ville )"
	        ." values ('$nom', '$prenom', '$email', '$mot', '$tel', '$adresse', '$cp', '$ville') ";
               
                $connexion -> exec($nouz);
                if($connexion){
                    echo "<center><aside class='succe'>
        <p><i class='fa-solid fa-check fa-bounce fa-xs' style='color: #63E6BE;'></i> <strong>Vous êtes bien enrégistré(e) ! </strong> Veuillez cliquer <a href='Connecter.php'>ici</a> pour vous connecter dans votre <strong>espace</strong> ! </p>
        
    </aside> </center>";
                }
            
        }
            
    }   
   
           
           
	  
        
    
    ?>
          
    </body>

<!--Concernant les conditions du mot de passe
 <script>
var boite_entreprise = document.querySelector(".entreprise");
var boite_particulier = document.querySelector(".particulier");
var formulaire = document.querySelector("#inscription");
function inscription(e) {
    if (e === "E") {
        boite_entreprise.style.display = "block";
        boite_particulier.style.display = "none";

    } else if (e === "P") {
        boite_particulier.style.display = "block";
        boite_entreprise.style.display = "none"; 
    }
};

var myInput = document.getElementById('password');
var letter = document.getElementById('letter');
var capital = document.getElementById('capital');
var number = document.getElementById('number');
var length = document.getElementById('length'); 

// Lorsque l'utilisateur appuie sur le champ du mot de passe, afficher la boîte de message
myInput.onfocus = function () {
    document.getElementById("message").style.display = "block";
}

// Lorsque l'utilisateur clique en dehors du champ du mot de passe, masquer la boîte de message
myInput.onblur = function () {
    document.getElementById("message").style.display = "none";
}

// Lorsque l'utilisateur commence à taper dans le champ du mot de passe
myInput.onkeyup = function () {
    // Valider la longueur du mot de passe
    if (myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
    } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
    }

    // Valider la présence d'une lettre minuscule
    var lowerCaseLetters = /[a-z]/;
    if (myInput.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
    } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
    }

    // Valider la présence d'une lettre majuscule
    var upperCaseLetters = /[A-Z]/;
    if (myInput.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
    } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
    }

    // Valider la présence d'un chiffre
    var numbers = /[0-9]/;
    if (myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
    } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
    }
}
</script>

 --->
</html>