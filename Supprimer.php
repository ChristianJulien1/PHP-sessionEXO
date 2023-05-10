<?php ob_start () ?>
<?php session_start () ?>

<?php
$content = ob_get_clean ();
require "template.php";
?>