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
<h3>Veuillez saisir votre prénom et nom :</h3><br/>
  <p><input type="text" name="prenom" value="" placeholder="Prénom"/></p>
  <p><input type="text" name="nom" value="" placeholder="Nom"/><br/><br/></p>




          <p>
              <label for="VILLED"> <strong>Villes</strong></label><br />
              <select name="villeD" id="villeD" tabindex="50" ><br />
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
          </p>


  <div class="footer">
   <?php
      include("includes/footer.php");
     ?>
  </div>
  </body>
</html>
