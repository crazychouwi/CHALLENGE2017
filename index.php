œ<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>challenge2017</title>

     <link rel="stylesheet" href="./assets/css/menuAccueil.css">
     <link rel="stylesheet" href="assets/css/style.css"> -->
     <link rel="stylesheet" href="./assets/css/connection.css"/>


  </head>
  <body>


    <header class="header">
            <?php
               include('includes/menuSite.php');
              ?>
       </header>
    <div class="contenu">
      <h1 class="headline">BIENVENUE</h1>

      <div class="bouton">

        <div class="formateur">
          <button class="form" type="submit">Formateur</button>
        </div>
        <div class="candidat">
          <button class="cand" type="submit">Candidat</button>
        </div>
      </div>

     <div class="footer">
     <?php
        include("includes/footer.php");
       ?>
    </div>

  </body>
</html>
