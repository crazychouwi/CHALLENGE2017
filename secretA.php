<?php
session_start();
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
if (isset($_SESSION['login']) && $_SESSION['mdp'] == true){
  echo"connexion";
}
else{
  echo"accés refusé";
}
    ?>
<a href="profil.php"><button type="button">Déconnection</button></a>
  </body>
</html>
