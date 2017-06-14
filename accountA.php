<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>FORMULAIREA</title>
 <link href="login.css" type="text/css" rel="stylesheet">
 <link href="assets/css/connection.css" type="text/css" rel="stylesheet">
  </head>
  <body>


  <div class="header">
          <?php
             include("includes/header.php");
            ?>
     </div>
     <h1>créer ton compte</h1>
        <div class="connexion">
          <p>déja inscrit  <a href="loginA.php">se connecter</a></p>
    <form method="post" action="traitementA.php" enctype="multipart/form-data">

<div class="identite">

   <label for="nom">Nom :</label>
   <input type="text" required="required" name="nom" id="nom" />
   <label for="prenom">Prénom :</label>
   <input type="text" name="prenom" id="prenom" />
   <label for="ddn">Date de naissance :</label>
   <input type="text" name="ddn" id="ddn" />
   <label for="adresse">Adresse :</label>
   <input type="text" name="adresse" id="adresse" />
   <label for="cp">Code Postal :</label>
   <input type="text" name="cp" id="cp" />
   <label for="ville">ville :</label>
   <input type="text" name="ville" id="ville" />
   <label for="tel">Numéro de téléphone :</label>
   <input type="text" name="tel" id="tel" />

</div>


<div class="connexion">

    <label for="login">Login :</label>
    <input type="text" name="login" id="login" />
    <label for="email">Email :</label>
    <input type="email" required="required" name="email" id="email" />

    <label for="password">Password :</label>
    <input type="password" required="required" name="password" id="pw">
    <label for="confirmation">Vérification password :</label>
    <input type="vpassword" required="required" name="password" id="password">

    <div id="forgot"><img src="assets/img/pt.jpg" id="point"><a href="forgot">mot de passe oublié</a></div>
    <input id="button" type="submit" name="commit" value="Sign In">

  </div>


  <div class="footer">
   <?php
      include("includes/footer.php");
     ?>
  </div>
  <script src="assets/js/jquery/dist/jquery.min.js"></script>
  <script src="assets/js/login.js"></script>

  </body>
  </html>
