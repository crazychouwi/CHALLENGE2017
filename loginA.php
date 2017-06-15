<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=challenge2017;charset=utf8', 'root', 'Meslunettes2');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$req = $bdd->prepare('SELECT password FROM Apprenants WHERE email = :email');
$result = $req->fetch(PDO::FETCH_ASSOC);
$hash = $result['password'];
$pass = $_REQUEST['password'];
if(password_verify($pass, $hash)){
echo 'mot de passe valide !';
header('Location: connexion.php');
}else{
echo 'mot de passe invalide';
}
?>

<DOCTYPE! HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>connexion</title>
 <link href="assets/css/connection.css" type="text/css" rel="stylesheet">

  </head>
  <body>
    <div class="header">
      
       </div>
<form method="post" action="connexionA.php" enctype="multipart/form-data">

<!-- <div  alt="logo"><img src="assets/img/logoSimplon.png" id="logo"></div> -->
<a href="accountA.php" id="lienInscription">Inscription</a>

<div class="connexion">


<label for="identifiant">Identifiant :</label><br/>
<input type="identifiant" name="identifiant" id="identifiant" /><br/>


<label for="">Password :</label><br/>
<input type="password" name="pw" id="pw"><br/>
<div id="forgot"><img src="assets/img/pt.jpg" id="point"><a href="forgot"> Mot de passe oublié?</a></div>

<input id="button" type="submit" value="Sign In">
</div>










<div class="footer">
 <?php
    include("includes/footer.php");
   ?>
</div>
</body>
</html>
