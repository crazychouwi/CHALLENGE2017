<DOCTYPE! HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>formulaire</title>
 <link href="login.css" type="text/css" rel="stylesheet">
 <link href="assets/css/connection.css" type="text/css" rel="stylesheet">
  </head>
  <body>
<form method="post" action=".php" enctype="multipart/form-data">

  <div class="header">
          <?php
             include("includes/header.php");
            ?>
     </div>
        <div class="connexion">
     <h1>créer ton compte</h1>
<p>déja inscrit  <a href="login.php">se connecter</a></p>
    <label for="nom">Nom :</label><br/>
   <input type="text" name="username" id="nom" /><br/>

   <!-- <label for="prenom">Prénom:</label><br/>
   <input type="prenom" name="prenom" id="prenom" /><br/> -->

    <label for="email">Email :</label><br/>
    <input type="email" name="email" id="email" /><br/>

    <label for="">password :</label><br/>
    <input type="password" name="password" id="pw"><br/>

    <label for=""> vérification password :</label><br/>
    <input type="password" name="vpw" id="vpassword"><br/>

<div id="forgot"><img src="assets/img/pt.jpg" id="point"><a href="forgot">mot de passe oublié</a></div>

  <input id="button" type="submit" value="Sign In">




  <div class="footer">
   <?php
      include("includes/footer.php");
     ?>
  </div>
  </body>
  </html>
