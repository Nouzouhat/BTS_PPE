<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de Devis</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.container {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    max-width: 900px;
    width: 100%;
}

h2 {
    color: #333;
}

.input-group {
    margin-bottom: 20px;
    text-align: left;
}

input[type="text"],
input[type="email"],
input[type="tel"],
textarea,
input[type="number"],
input[type="date"] {
    width: calc(100% - 20px);
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size: 16px;
    margin-top: 5px;
}

label {
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
    text-align: left;
}

button {
    background-color: darkred;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: red;
}

button:active {
    background-color: brown;
}


.input-row {
    display: flex;
}

.input-row input {
    flex: 1;
    margin: 0 5px;
}

.input-row input:first-child {
    margin-left: 0;
}

.input-row input:last-child {
    margin-right: 0;
}

    </style>
</head>
<body>
    <center>
    <div class="container">
        <h2>Demande de Devis</h2>
        <form action="#" method="post">
             <div class="input-group">
                <div class="input-row">
                    <input type="text" id="nom" name="nom" placeholder="Nom complet" required>
                    <input type="email" id="email" name="email" placeholder="Adresse e-mail" required>
                    <input type="tel" id="telephone" name="telephone" placeholder="Numéro de téléphone" required>
                </div>
            </div>
            <div class="input-group">
                <input type="text" id="entreprise" name="entreprise" placeholder="Entreprise">
            </div>
            <div class="input-group">
                <input type="text" id="adresse" name="adresse" placeholder="Adresse">
            </div>
            <div class="input-group">
                <textarea id="details" name="details" placeholder="Détails de la demande" required></textarea>
            </div>
            <div class="input-group">
                <label for="types_materiel">Types de matériels nécessaires:</label><br>
                <input type="checkbox" id="gros_oeuvre" name="types_materiel" value="Gros œuvre">
                <label for="gros_oeuvre"> Gros œuvre</label><br>
                <input type="checkbox" id="terrassement" name="types_materiel" value="Terrassement">
                <label for="terrassement"> Terrassement</label><br>
                <!-- Ajouter les autres types de matériels ici -->
            </div>
            <div class="input-group">
                <label for="quantite">Quantité de chaque type de matériel requis:</label><br>
                <input type="number" id="quantite_gros_oeuvre" name="quantite_gros_oeuvre" placeholder="Gros œuvre"><br>
                <input type="number" id="quantite_terrassement" name="quantite_terrassement" placeholder="Terrassement"><br>
                <!-- Ajouter les autres quantités de matériels ici -->
            </div>
            <div class="input-group">
                <label for="date_debut">Date de début de la location:</label>
                <input type="date" id="date_debut" name="date_debut" required>
            </div>
            <div class="input-group">
                <label for="date_fin">Date de fin de la location:</label>
                <input type="date" id="date_fin" name="date_fin" required>
            </div>
            
            <div class="input-group">
                <center><button type="submit">Envoyer la demande</button></center>
            </div>

        </form>
    </div>
    </center>
</body>
</html>
