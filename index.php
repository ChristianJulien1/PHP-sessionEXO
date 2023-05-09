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
    <div class = "text-center mt-5">
    <button type="button" class="p-5"><a href="information.php" class=" fw-5 fs-5 text-secondary">Informations</a></button>
    </div>
</body>
</html>


<?php 
$content = ob_get_clean ();
require "template.php";
?>