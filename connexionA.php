<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
<<<<<<< HEAD
    <link rel="stylesheet" href="assets/css/menuAccueil.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/connection.css">
    <link rel="stylesheet" href="assets/css/connec.css">
=======

    <link rel="stylesheet" href="assets/css/connec.css">
    <link rel="stylesheet" href="assets/css/menuAccueil.css">
>>>>>>> ded5be4d6c583c15038b627da1345374923fd17e
    <title>Connexion Candidat</title>
  </head>
  <body>

    <div class="header">
    <?php
       include("includes/header.php");
      ?>
    </div>

    <div class="blocConnex">

          <div class="choixFormulaire">
            <a href="formq.php">Remplir le formulaire</a>
          </div>

          <div class="choixQuestionnaire">
            <a href="questions.php">Remplir le questionnaire</a>
          </div>

          <div class="badges">
            <h3>Vos badges :</h3>
          </div>

      </div>

<<<<<<< HEAD
        <?php
           include("includes/footer2.php");
=======
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
>>>>>>> ded5be4d6c583c15038b627da1345374923fd17e
        ?>
  </div>
  </body>
</html>
