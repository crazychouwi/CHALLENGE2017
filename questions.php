<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Questions</title>
    <link rel="stylesheet" href="assets/css/style.css">

  </head>
  <body>
    <?php
       include("includes/menu.php");
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
        <input type="radio" name="diplome" value="sans"> <label for="sans">Sans diplôme</label>
        <input type="radio" name="diplome" value="brevet"><label for="brevet"> Brevet des collèges</label>
        <input type="radio" name="diplome" value="BEP"> <label for="BEP">BEP</label>
        <input type="radio" name="diplome" value="CAP"> <label for="CAP">CAP</label>
        <input type="radio" name="diplome" value="bac"> <label for="bac">Bac général ou technologique</label>
        <input type="radio" name="diplome" value="bacPro"> <label for="bacPro">Bac Pro</label>
        <input type="radio" name="diplome" value="bac+2"> <label for="bac+2">Bac +2</label>
        <input type="radio" name="diplome" value="licence"> <label for="licence">Licence</label>
        <input type="radio" name="diplome" value="master"><label for="master"> Master</label>
        <input type="radio" name="diplome" value="doctorat"> <label for="doctorat">Doctorat</label>
        <input type="radio" name="diplome" value="bacPro"> <label for="bacPro">Bac Pro</label>
        <input type="radio" name="diplome" value="autreDiplome"><label for="autreDiplome"> Autre, précisez :</label>
        <input type="text" name="diplome" value="">

        <p>Racontez-nous en quelques phrases votre parcours.</p>
        <textarea name="parcours" rows="8" cols="80"></textarea>

        <p>Quel est votre niveau d'anglais (lu/écrit) ?</p>
        <h6>Cette information n'est pas éliminatoire, ni déterminante dans la candidature, nous la demandons à titre indicatif.</h6>
        <input type="radio" name="anglais" value="tb"> <label for="tb">Très bon</label>
        <input type="radio" name="anglais" value="bon"><label for="bon"> Bon</label>
        <input type="radio" name="anglais" value="intermediaire"> <label for="intermediaire">Intermediaire</label>
        <input type="radio" name="anglais" value="debutant"> <label for="debutant">Débutant</label>
        <input type="radio" name="anglais" value="autreAnglais"><label for="autreAnglais"> Autre, précisez :</label>
        <input type="text" name="anglais" value="">

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

      <?php
         include("includes/footer2.php");
      ?>
  </body>
</html>
