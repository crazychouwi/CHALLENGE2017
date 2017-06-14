<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>formulaireInscriptionCandidat</title>
 <link href="login.css" type="text/css" rel="stylesheet">
 <link href="assets/css/connection.css" type="text/css" rel="stylesheet">
  </head>
  <body>


  <div class="header">
          <?php
             include("includes/header.php");
            ?>
     </div>
        <div class="connexion">
         <h1>Créer votre compte</h1>
          <p>déja inscrit  <a href="connexionC.php">se connecter</a></p>
    <form method="post" action="" enctype="multipart/form-data">

    <label for="login">Login :</label><br/>
    <input type="text" name="login" id="login" /><br/>

    <label for="nom">Nom :</label><br/>
    <input type="text" required="required" name="nom" id="nom" /><br/>

   <label for="prenom">Prénom :</label><br/>
   <input type="text" name="prenom" id="prenom" /><br/>

    <label for="email">Email :</label><br/>
    <input type="email" required="required" name="email" id="email" /><br/>

    <label for="adress">adresse :</label><br/>
    <input type="text" required="required" name="adress" id="adress" /><br/>

    <label for="postcode">code postal :</label><br/>
    <input type="text" required="required" name="code postal" id="postcode" /><br/>

    <label for="ville">ville :</label><br/>
    <input type="text" required="required" name="Ville" id="ville" /><br/>

    <label for="password">Password :</label><br/>
    <input type="password" required="required" name="password" id="pw"><br/>

    <label for="confirmation">Vérification password :</label><br/>
    <input type="password" required="required" name="password" id="vpassword"><br/>

    <!-- <div id="forgot"><img src="assets/img/pt.jpg" id="point"><a href="forgot">mot de passe oublié</a></div> -->
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
