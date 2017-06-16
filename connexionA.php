<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">


    <link rel="stylesheet" href="assets/css/connection.css">
    <link rel="stylesheet" href="assets/css/menuAccueil.css">
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

      <div class="footer2">
       <?php
          include("includes/footer.php");
         ?>
      </div>

  </body>
</html>
