<?php

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';
// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=challenge2017;charset=utf8', 'root', 'choupette', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));;
		// $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
// Insertion des réponses à l'aide de requête préparée
try {
$heros=htmlspecialchars($_POST['heros']);
$xpProgrammation=htmlspecialchars($_POST['xpProgrammation']);
$hack=htmlspecialchars($_POST['hack']);
$diplome=$_POST['diplome'];
$parcours=htmlspecialchars($_POST['parcours']);
$levelAnglais=htmlspecialchars($_POST['anglais']);
$motivation=htmlspecialchars($_POST['motivation']);
$faireDansLaVie=htmlspecialchars($_POST['faireDansLaVie']);
$profilMOOC=htmlspecialchars($_POST['profilMOOC']);


$req = $bdd->prepare('INSERT INTO formulaires(idApprenant, heros, xpProgrammation, hack, diplome, parcours, levelAnglais, motivation, faireDansLaVie, profilMOOC) VALUES(:heros, :xpProgrammation, :hack, :diplome, :parcours, :levelAnglais, :motivation, :faireDansLaVie, :profilMOOC)');
$req->execute(array(
  'heros' => $heros,
  'xpProgrammation' => $xpProgrammation,
  'hack' => $hack,
  'diplome' => $diplome,
  'parcours' => $parcours,
  'levelAnglais' => $levelAnglais,
  'motivation' => $motivation,
  'faireDansLaVie' => $faireDansLaVie,
  'profilMOOC' => $profilMOOC
));
// Redirection du visiteur vers la page connectionA
// header('Location: connexionA.php');
echo "Votre candidature est bien envoyée";
} catch (Exception $e) {
    echo "Nous ne pouvons envoyer votre candidature";
}
$req->closeCursor();
exit;
