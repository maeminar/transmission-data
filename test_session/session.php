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
var_dump($_SESSION['username']);
var_dump($_SESSION['password']);
?>
<body>
   <h1>Bienvenue sur ce site <?php print_r($_SESSION['username']);?></h1>
   <?php 
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<p>La méthode de la requête est : POST</p>";
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "<p>La méthode de la requête est : GET</p>";
}
?>
</body>
</html>