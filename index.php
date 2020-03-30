<?php
require("elements/header.php");
session_start();

if(!isset($_SESSION["pseudo"])){
    header("Location: login.php");
}
?>
<!-- Intérieur du body -->
<h1>Digicoco</h1>
<h2>Accueil</h2>
<?php
require("elements/navbar.php");
?>

<?php
require("elements/footer.php");
?>