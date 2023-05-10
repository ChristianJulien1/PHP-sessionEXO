<?php ob_start () ?>
<?php session_start () ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/sandstone/bootstrap.min.css"> 
    <title>PHP</title>
</head>
<body>
    
</html>
    
    <div class = "p-5 mt-5">
    <a href="index.php" class="p-5 bg-dark text-white btn">Accueil</a><h1 class="text-center mt-5">Ajouter des données</h1>
    </div>

<form class="container mt-5 perso" action="traitement.php" method="POST">
<div class="mb-3">
  <label for="nom" class="form-label">Prénom :</label>
  <input type="text" class="form-control p-4" placeholder="Prénom"  name="surname" required>
  <label for="nom" class="form-label">Nom :</label>
  <input type="text" class="form-control p-4" placeholder="Nom"  name="name" required>
</div>
<div class="mb-3">
  <label for="age" class="form-label">Age (18 à 70 ans) :</label>
  <input type="number" class="form-control"  placeholder="Renseignez votre age" name="age" required>
</div>
<div class="mb-3 input-group">
        <span class="input-group-text bg-secondary">Taille (1,26m à 3m)</span><input type="number" min="1.26" max="3" step="0.01" class="form-control" name="taille"></input><span class="input-group-text bg-secondary">M</span>
</div>
	Homme : <INPUT type=radio name="sexe" value="H"> Femme : <INPUT type=radio name="sexe" value="F" required>
<div class ="text-end mb-5">
    <input class="mt-4 btn btn-dark" type="submit" value="Enregistrer les données">
</div>
</form>

<?php
$content = ob_get_clean();
require "template.php";
?>