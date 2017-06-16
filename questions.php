<?php
session_start();
$_SESSION['nom'] = $_POST['nom']; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Questions</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/menuAccueil.css">

  </head>
  <body>
    <?php
         include("includes/header.php");
      ?>

      <h1>Candidature</h1>

      <form class="formQuestions" action="traitement_questions.php" method="post" name="questions">

        <p>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</p>
        <textarea name="heros" rows="8" cols="80"></textarea>

        <h3>EXPERIENCES ET PARCOURS</h3>

        <p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</p>
        <textarea name="xpProgrammation" rows="8" cols="80"></textarea>

        <p>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</p>
        <textarea name="hack" rows="8" cols="80"></textarea>

        <p>Quel est le dernier diplôme que vous ayez obtenu ?</p>
        <h6>Idem : information demandée à titre indicatif</h6>
        <input type="radio" name="diplome" value="sans" id="dip"> <label for="dip">Sans diplôme</label>
        <input type="radio" name="diplome" value="brevet" id="dip"><label for="dip"> Brevet des collèges</label>
        <input type="radio" name="diplome" value="BEP" id="dip"> <label for="dip">BEP</label>
        <input type="radio" name="diplome" value="CAP" id="dip"> <label for="dip">CAP</label>
        <input type="radio" name="diplome" value="bac" id="dip"> <label for="dip">Bac général ou technologique</label>
        <input type="radio" name="diplome" value="bacPro" id="dip"> <label for="dip">Bac Pro</label>
        <input type="radio" name="diplome" value="bac+2" id="dip"> <label for="dip">Bac +2</label>
        <input type="radio" name="diplome" value="licence" id="dip"> <label for="dip">Licence</label>
        <input type="radio" name="diplome" value="master" id="dip"><label for="dip"> Master</label>
        <input type="radio" name="diplome" value="doctorat" id="dip"> <label for="dip">Doctorat</label>
        <input type="radio" name="diplome" value="bacPro" id="dip"> <label for="dip">Bac Pro</label>
        <input type="radio" name="diplome" value="autreDiplome" id="dip"><label for="dip"> Autre, précisez :</label>
        <!-- <input type="text" name="diplome" value=""> -->

        <p>Racontez-nous en quelques phrases votre parcours.</p>
        <textarea name="parcours" rows="8" cols="80"></textarea>

        <p>Quel est votre niveau d'anglais (lu/écrit) ?</p>
        <h6>Cette information n'est pas éliminatoire, ni déterminante dans la candidature, nous la demandons à titre indicatif.</h6>
        <input type="radio" name="anglais" value="tb" id="ang"> <label for="ang">Très bon</label>
        <input type="radio" name="anglais" value="bon" id="ang"><label for="ang"> Bon</label>
        <input type="radio" name="anglais" value="intermediaire" id="ang"> <label for="ang">Intermediaire</label>
        <input type="radio" name="anglais" value="debutant" id="ang"> <label for="ang">Débutant</label>
        <input type="radio" name="anglais" value="autreAnglais" id="ang"><label for="ang"> Autre, précisez :</label>
        <!-- <input type="text" name="anglais" value=""> -->

        <h3>MOTIVATIONS</h3>

        <p>Dites nous pourquoi vous voulez intégrer Simplon. Racontez-nous votre parcours et détaillez-nous votre motivation ci-dessous, en vous exprimant avec votre style à vous, mais ne vous limitez pas à un texte tapé à la va-vite. Aussi, n'hésitez pas à faire une vidéo, un site ou tout autre chose qui démontrera votre envie, votre motivation, et vos compétences !</p>
        <textarea name="motivation" rows="8" cols="80"></textarea>

        <p>Dans un an, avec vos nouveaux superpouvoirs de code informatique, que souhaiterez-vous faire dans votre vie ?</p>
        <textarea name="faireDansLaVie" rows="8" cols="80"></textarea>

        <p>Si vous avez un profil Openclassrooms, Codeschool ou autre, indiquez nous votre profil (FACULTATIF) </p>
        <h6>Votre présence et activité sur des sites d'apprentissage en ligne atteste de votre motivation ;)</h6>
        <input type="text" name="profilMOOC" value="">

        <input type="submit" name="Envoyer" value="Envoyer">





      </form>

      <div class="footer">
    <?php
       include("includes/footer.php");
      ?>
  </div>
  </body>
</html>
