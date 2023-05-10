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
<html>
<body>
    <div class = "text-center mt-5">
    <a href="information.php" class="p-5 bg-dark text-white btn">Information</a>
    </div>
</body>
</html>

<?php 
$content = ob_get_clean ();
require "template.php";
?>