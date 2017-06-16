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
      <link rel="stylesheet" href="assets/css/connecF.css">
      <link rel="stylesheet" href="assets/css/menuAccueil.css">
    <title>Connexion</title>
  </head>
  <body>
    <div class="header">
      <?php
        include("includes/header.php");
       ?>
    </div>


<h1>Bienvenue :</h1><br/>
<?php
  if (isset($_SESSION['login']) || $_SESSION['email'] && $_SESSION['password']) {
    echo "<p>Vous voici connecté ! Bonjour " . $_SESSION['login'] . " !</p>";
  }
  else{
    echo "accès denied";
  }
  ?>
<div class="menu">
<strong><p>Filtres :</p></strong>
    <label for="VILLED"> <strong>Choix de la promotion :</strong></label><br />
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
    </select></br></br>

    <label for="FORMULAIRE"><strong>Choix des formulaires :</strong></label><br />
    <select name="FORMULAIRE" id="FORMULAIRE" tabindex="200"><br/>
        <option value="" >Faites votre choix</option>
            <option value="#">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</option>
            <option value="#">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</option>
            <option value="#">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</option>
            <option value="#">Quel est le dernier diplôme que vous ayez obtenu ?</option>
            <option value="#">Racontez-nous en quelques phrases votre parcours.</option>
            <option value="#">Quel est votre niveau d'anglais (lu/écrit) ?</option>
            <option value="#">Quel est votre niveau d'anglais (lu/écrit) ?</option>
            <option value="#">Dans un an, avec vos nouveaux superpouvoirs de code informatique, que souhaiterez-vous faire dans votre vie ? *</option>
            <option value="#">Pré-requis : Badges Codecademy (OBLIGATOIRE) *</option>
            <option value="#">Si vous avez un profil Openclassrooms, Codeschool ou autre, indiquez nous votre profil (FACULTATIF)</option>
            <option value="#">Êtes-vous disponible pour suivre une formation de 8 mois à temps plein (35h/semaine) suivie d'un stage de 2,5 mois ?</option>
            <option value="#">Si non, quelles sont vos contraintes ?</option>
            <option width="50" value="#">Cette formation peut ouvrir droit à une rémunération forfaitaire (ARE Pôle Emploi ou ASP Région, RSA)</option>
            <option value="#">Comment avez-vous entendu parler de la formation Simplon Carcassonne ?</option>
            <option value="#"></option>
        </optgroup>
    </select>
</div></br></br>

  <?php
    // if (isset($_SESSION['login']) || $_SESSION['email'] && $_SESSION['password']) {
    //   echo "<p>Vous voici connecté ! Bonjour " . $_SESSION['login'] . " !</p>";
      try
      {
          $bdd = new PDO('mysql:host=localhost;dbname=challenge2017;charset=utf8', 'root', 'mayrai66!!');
      }
      catch (Exception $e)
      {
              die('Erreur : ' . $e->getMessage());
      }
      $reponse = $bdd->query('SELECT * FROM apprenants');
      echo '<div class="table"><table BORDER="2">  <tr>
       <th></th>
       <th> Nom </th>
       <th> Prénom </th>
       <th> Promotion </th>
       <th> Reponse au questionnaire </th>
        </tr>';
      while ($donnees = $reponse->fetch())
      {

      echo '<tr><th>' . $donnees['idApprenant'] . ' </th><td>' . $donnees['nom'] . '</td><td>' . $donnees['prenom'] . '</td><td>' . $donnees['centreDeFormation'] . '</td><td></td></tr>';
      }
      echo '</table></div>';
      $reponse->closeCursor();

  ?>


  <div class="footer">
   <?php
      include("includes/footer.php");
     ?>
  </div>
  </body>
</html>
