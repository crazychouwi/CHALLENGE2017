<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>challenge2017</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/connection.css"/>
    <link rel="stylesheet" href="./assets/css/menuSite.css">
  </head>
  <body>


    <header class="header">
            <?php
               include('includes/menuSite.php');
              ?>
       </header>
    <div class="contenu">
      <h1 class="headline">BIENVENUE</h1>
      <h1>Vous êtes</h1>
      <div class="choix">
        <div class="formateur">
          <button class="form" type="submit">Formateur</button>
        </div>
        <div class="candidat">
          <button class="cand" type="submit">Candidat</button>
        </div>
      </div>
    </div>
    <!-- <div class="footer">
     <?php
        include("includes/footer.php");
       ?>
    </div> -->

  </body>
</html>
