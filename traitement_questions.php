<?php
// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=challenge2017;charset=utf8', 'root', 'choupette');
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
// Insertion des réponses à l'aide d'une requête préparée
try {


$req = $bdd->prepare('INSERT INTO Formulaires (heros, xpProgrammation, hack, diplome, parcours, levelAnglais, motivation, faireDansLaVie, profilMOOC) VALUES(:heros, :xpProgrammation, :hack, :diplome, :parcours, :levelAnglais, :motivation, :faireDansLaVie, :profilMOOC)');
$req->execute(array('heros' => $_POST['heros'],
'xpProgrammation' => $_POST['xpProgrammation'],
'hack' => $_POST['hack'],
'diplome' => $_POST['diplome'],
'parcours' => $_POST['parcours'],
'levelAnglais' => $_POST['anglais'],
'motivation' => $_POST['motivation'],
'faireDansLaVie' => $_POST['faireDansLaVie'],
'profilMOOC' => $_POST['profilMOOC']
));
// Redirection du visiteur vers la page du minichat
header('Location: connexionA.php');
echo "Votre candidature est bien envoyée";
} catch (Exception $e) {
    echo "Vous avez déja envoyé votre candidature";
}
