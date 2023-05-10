<?php ob_start() ?>
<?php session_start() ?>

    <div class = "p-5 mt-5">
    <a href="index.php" class="p-5 bg-dark text-white btn">Accueil</a>
        <div class="form-group col-2">
        <label for="exampleSelect1" class="form-label mt-4">Votre compte</label>
        <select name="affichage" class="form-select" id="exampleSelect1">
            <option value="">Choisissez votre affichage</option>
            <option value="Débogage">Débogage</option>
            <option value="Concaténation">Concaténation</option>
            <option value="Boucle">Boucle</option>
            <option value="Fonction">Fonction</option>
            <option value="Supprimer">Supprimer</option>
        </select>
    </div>

    <div class ="text-start mb-5">
    <a href="compte.php" class="mt-5 p-5 bg-dark text-white btn">Voir mes informations</a>
    </div>

<?php
$content = ob_get_clean();
require "template.php";
?>