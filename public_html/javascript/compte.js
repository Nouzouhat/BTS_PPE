/*
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/css.css to edit this template
*/
/* 
    Created on : 15 nov. 2023, 09:41:50
    Author     : Nouzhati
*/
/*Descrption: javascript pour écrire et lire un fichier js*/
document.getElementById("inscription").addEventListener("submit", function(e){
var erreur;
var name = document.getElementById("name");
var prenom = document.getElementById("prenom");
var pwd = document.getElementById("password");

if(!name.value){
  erreur= "Veuillez renseigner un nom";
}
if(!prenom.value){ 
  erreur= "Veuillez renseigner un prénom";
}
if(!pwd.value){
  erreur= "Veuillez renseigner un mot de passe";
}
if(erreur){
   e.preventDefault("erreur");
    document.getElementById("erreur").innerHTML = erreur;
    return false;
    } 
else{
    alert("Vous êtes enregistré(e). Cliquez vers le logo à votre gauche pour accéder à votre compte.");
    }
});





/*concernant le mot de passe */
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





