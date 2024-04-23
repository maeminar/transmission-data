<?php
setcookie("dateSave",date("now"), time()+3600);
setcookie("version", phpversion(), time()+3600);
setcookie("navigator", $_SERVER['HTTP_USER_AGENT'], time()+3600);
?>

<h2>Date de la sauvegarde :</h2>
<?php var_dump($_COOKIE['dateSave']);?>
<h2>Version de PHP :</h2>
<?php var_dump($_COOKIE['version']);?>
<h2>Navigateur utilisé</h2>
<?php var_dump($_COOKIE['navigator']);?>