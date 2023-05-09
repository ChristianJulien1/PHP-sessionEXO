<?php ob_start() ?>
<?php session_start() ?>

    <div class = "p-5 mt-5">
    <button type="button" class="col-1 rounded"><a href="index.php" class=" fw-5 fs-5 text-secondary">Home</a></button>
    </div>

    <div class="container bg-success p-5 col-3 text-center">
    <?php 
        if(isset($_POST['surname']) && isset($_POST['name']) && isset($_POST['age']) && isset($_POST['taille'])){

            $prenom =$_POST['surname'];
            $nom =$_POST['name'];
            $age =$_POST['age'];
            $taille =$_POST['taille'];

            //Création des variables de session
            $_SESSION['lesurnom'] = $prenom;
            $_SESSION['lenom'] = $nom;
            $_SESSION['lage'] = $age;
            $_SESSION['lataille'] = $taille;

            echo "Données sauvegardées";
            
        }

    ?>
    </div>

    <div>
        <?php
           $infos = array("Je m'appelle" => "$prenom", "" => "$nom", "j'ai" => "$age ans", "et je mesure" => "$taille m");

           $phrase = "";
           foreach ($infos as $details => $exacts){
             if($details != ""){
               $phrase .= $details . " " . $exacts . ", ";
             }else{
               $phrase .= $exacts . " ";
             }
           }
           
           $phrase = substr($phrase, 0, -2);
           
           $phrase .= ".";
           
           echo $phrase;
           
        ?>
    </div>

<?php
$content = ob_get_clean();
require "template.php";
?>