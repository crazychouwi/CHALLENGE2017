<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>challenge2017</title>
     <link rel="stylesheet" href="assets/css/menuAccueil.css">
  </head>
  <body>
    <header class="header">
            <?php
               include('includes/header.php');
              ?>
       </header>
    <div class="contenu">
      <h1 class="headline">BIENVENUE</h1>

      <div class="bouton">

        <div class="formateur">
          <a href="connexionF.php"><button class="form" type="submit">Formateur</button></a>
        </div>
        <div class="candidat">
          <a href="connexionA.php"><button class="cand" type="submit">Candidat</button></a>
        </div>
      </div>

     <div class="footer">
     <?php
        include("includes/footer.php");
       ?>
    </div>

  </body>
</html>
