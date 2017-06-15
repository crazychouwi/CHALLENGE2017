<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>FORMULAIREA</title>
 
 <link href="assets/css/connection.css" type="text/css" rel="stylesheet">
  </head>
  <body>


  <div class="header">
          <?php
             include("includes/header.php");
            ?>
     </div>
        <div class="connexion">
          <h1>créer ton compte</h1>
          <p>déja inscrit  <a href="loginA.php">se connecter</a></p>
    <form method="post" action="traitementA.php" enctype="multipart/form-data">

  <div class="container">
       <div class="identite">

   <label for="nom">Nom :</label></br>
   <input type="text" required="required" name="nom" id="nom" /></br>
   <label for="prenom">Prénom :</label></br>
   <input type="text" name="prenom" id="prenom" /></br>
   <label for="ddn">Date de naissance :</label></br>
   <input type="text" name="ddn" id="ddn" /></br>
   <label for="adresse">Adresse :</label></br>
   <input type="text" name="adresse" id="adresse" /></br>
   <label for="cp">Code Postal :</label></br>
   <input type="text" name="cp" id="cp" /></br>
   <label for="ville">ville :</label></br>
   <input type="text" name="ville" id="ville" /></br>
   <label for="tel">Numéro de téléphone :</label></br>
   <input type="text" name="tel" id="tel" /></br>

</div>

<div class="login">

    <label for="login">Login :</label></br>
    <input type="text" name="login" id="login" /></br>
    <label for="email">Email :</label></br>
    <input type="email" required="required" name="email" id="email" /></br>
    <label for="password">Password :</label></br>
    <input type="password" required="required" name="password" id="pw"></br>
    <label for="confirmation">Vérification password :</label></br>
    <input type="password" required="required" name="password" id="vpassword"></br>
    <div id="forgot"><img src="assets/img/pt.jpg" id="point"><a href="forgot">mot de passe oublié</a></div>

  </div>
</div>
<input id="button" type="submit" name="commit" value="Sign In">

  <div class="footer">
   <?php
      include("includes/footer.php");
     ?>
  </div>
  <script src="assets/js/jquery/dist/jquery.min.js"></script>
  <script src="assets/js/login.js"></script>

  </body>
  </html>
