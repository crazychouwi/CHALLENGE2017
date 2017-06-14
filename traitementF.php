<?php
session_start();
$_SESSION['nom'] = $_POST['nom'];
$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['password'] = $_POST['password'];
?>
<?php
// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=challenge2017;charset=utf8', 'root', '!!');
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
try {

$options = [
    'cost' => 10,
];
$pass = $_POST['password'];
$hash = password_hash($pass, PASSWORD_BCRYPT, $options);

$req = $bdd->prepare('INSERT INTO Formateurs (nom, prenom, login, email, password) VALUES(:nom, :prenom, :login, :email, :password)');
$req->execute(array('nom' => $_POST['nom'], 'prenom' => $_POST['prenom'], 'login' => $_POST['login'], 'email' => $_POST['email'], 'password' => $hash));
// Redirection du visiteur vers la page du minichat
header('Location: connexionF.php');
} catch (Exception $e) {
    echo "Vous êtes déja inscrit";
}

?>
