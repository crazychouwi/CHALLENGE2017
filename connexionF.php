<?php
 session_start();
 $_SESSION['login'] = $_POST['login'];
 $_SESSION['password'] = $_POST['password'];
 $_SESSION['email'] = $_POST['email'];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/connection.css">
    <link rel="stylesheet" href="assets/css/connec.css">
    <title>Connexion</title>
  </head>
  <body>
    <div class="header">
      <?php
        include("includes/header.php");
       ?>
    </div>

    <?php
      if (isset($_SESSION['login']) || $_SESSION['email'] && $_SESSION['password']) {
        echo "<p>Vous voici connecté ! Merci " . $_SESSION['login'] . " ! A bientôt !</p>";

echo '<h3>Entrez vos Nom et prénom :</h3><br/>
  <p><input type="text" name="prenom" value="" placeholder="Prénom"/></p>
  <p><input type="text" name="nom" value="" placeholder="Nom"/><br/><br/></p>
          <p>
              <label for="VILLED"> <strong>Villes</strong></label><br />
              <select name="villeD" id="villeD" tabindex="200" ><br />
                  <option value="">Faites votre choix</option>
                      <option value="Montpellier">Montpellier </option>
                      <option value="Lyon">Lyon </option>
                      <option value="Paris">Paris </option>
                      <option value="Nimes">Nîmes </option>
                      <option value="Marseille">Marseille </option>
                      <option value="Narbonne">Narbonne</option>
                      <option value="Perpignan">Perpignan </option>
                  </optgroup>
              </select>
          </p>';

        }
        else{
          echo "accès denied";
        }
      ?>
  <div class="footer">
   <?php
      include("includes/footer.php");
     ?>
  </div>
  </body>
</html>
