<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>formulaire</title>
 <link href="login.css" type="text/css" rel="stylesheet">
 <link href="assets/css/connection.css" type="text/css" rel="stylesheet">
  </head>
  <body>


  <div class="header">
    <img src="assets/img/logoSimplon.png" alt="logoSimplon">
  </div>

        <div class="connexion">
         <h1>créer ton compte</h1>
          <p>déja inscrit  <a href="login.php">se connecter</a></p>
    <form method="post" action="traitement.php" enctype="multipart/form-data">

    <label for="nom">Nom :</label><br/>
    <input type="text" required="required" name="username" id="nom" /><br/>

   <label for="prenom">Prénom :</label><br/>
   <input type="text" name="prenom" id="prenom" /><br/>

   <label class="label" for="login">Login :</label>
   <input type="text" name="login" id="login" />

    <label for="email">Email :</label><br/>
    <input type="email" required="required" name="email" id="email" /><br/>

    <label for="password">Password :</label><br/>
    <input type="password" required="required" name="password" id="pw"><br/>

    <label for="confirmation">Vérification password :</label><br/>
    <input type="password" required="required" name="password" id="vpassword"><br/>

    <div id="forgot"><img src="assets/img/pt.jpg" id="point"><a href="forgot">mot de passe oublié</a></div>

    <input id="button" type="submit" name="commit" value="Sign In">

  <div class="footer">
   <?php
      include("includes/footer.php");
     ?>
  </div>
  </body>
  </html>
