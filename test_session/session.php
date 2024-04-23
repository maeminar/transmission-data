<?php session_start(); 
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<?php
    include("../navbar.php"); 
?>
<?php 
var_dump($_SESSION['username']);
var_dump($_SESSION['password']);
?>
<body>
   <h1>Bienvenue sur ce site, <?php print_r($_SESSION['username']);?> !</h1>
   <p><a href="login.php"><?php session_destroy()?>Se déconnecter</a></p>
</body>
</html>