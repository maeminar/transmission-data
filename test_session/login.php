<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<?php
    include("../navbar.php"); 
?>
<body>
<div class="p-3 m-5 d-flex justify-content-center align-items-center flex-column border border-4 border-black bg-dark text-white">
<h1>Connectez-vous</h1>
<form method="POST" action="login.php">
    <div class="form-group row">
<label for="username">Identifiant :</label>
    <div class="col-sm-10">
<input type="text" name="username" id="username">
    </div>
    </div>
    <div class="form-group row">
<label  for="password">Mot de passe :</label>
    <div class="col-sm-10">
<input type="password" name="password" id="password">
    <div class="col-sm-10">
<input type="submit" value="se connecter">
</div>
</div>
</form>

<?php
$username_valide = "Mae";
$password_valide = "mdp";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'],$_POST['password']))  {
    if($_POST['username'] === $username_valide && $_POST['password'] === $password_valide) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        echo("Welcome " . $_SESSION['username'] . "! Vous êtes connecté(e)");?>
        <a href="session.php">Poursuivre ma visite par ici.</a>
    <?php
    }
    else {
        echo '<div class="alert alert-danger" role="alert">';
        echo("Vous vous êtes trompés. Veuillez réessayer.");
        echo '</div>';
    }
}
?>

</body>
</html>