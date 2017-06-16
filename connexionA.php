<?php
 session_start();
 $_SESSION['login'] = $_POST['login'];
 $_SESSION['password'] = $_POST['password'];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="assets/css/connec.css">
    <link rel="stylesheet" href="assets/css/menuAccueil.css">
    <title>Connexion Candidat</title>
  </head>
  <body>
    <?php
       include("includes/header.php");

      if (isset($_SESSION['login']) && $_SESSION['password']) {
        echo "<p>Vous voici connecté ! Merci " . $_SESSION['login'] . " ! A bientôt !</p>";
      }
      else{
        echo "accès denied";
      }
    ?>
    <form class="" action="index.html" method="post">

      <h3>Pseudo :</h3>
      <p><input type="text" name="login" value="" placeholder="Pseudo"/></p>
      <h3>Password :</h3>
      <p><input type="text" name="password" value="" placeholder="Mot de passe"/></p>
            <p>
                <!-- <label for="villeD"> <strong>Villes</strong></label><br />
                <select name="villeD" id="villeD" tabindex="200" ><br />
                    <option value="">Faites votre choix</option>
                        <option value="Montpellier">Montpellier </option>
                        <option value="Lyon">Lyon </option>
                        <option value="Paris">Paris </option>
                        <option value="Nimes">Nîmes </option>
                        <option value="Marseille">Marseille </option>
                        <option value="Narbonne">Narbonne</option>
                        <option value="Perpignan">Perpignan </option>
                    </optgroup> -->
                </select>
            </p>
            <p><input type="button" name="Valider" value="Connexion"></p>
        </form>
        <div class="footer">
      <?php
         include("includes/footer.php");
        ?>
  </div>
  </body>
</html>
