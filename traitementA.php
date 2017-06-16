<?php
session_start();
$_SESSION['nom']=$_POST['nom'];


$_SESSION['admin'] = true;
?>
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=challenge2017;charset=utf8', 'root', 'Meslunettes2');
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

$req = $bdd->prepare('INSERT INTO Apprenants (nom, prenom, adresse, code_postal, ville, email,login, password) VALUES(:nom, :prenom, adresse:,cp:, ville, :login, :email, :password)');
$req->execute(array('nom' => $_POST['nom'], 'prenom' => $_POST['prenom'], 'adresse' =>$_POST['adresse'], 'code_postal' =>$_POST['cp'],'ville'=>$_POST['ville'],'login' => $_POST['login'], 'email' => $_POST['email'], 'password' => $hash));
// Redirection du visiteur vers la page connexionA
header('Location: connexionA.php');
} catch (Exception $e) {
    echo "Vous êtes déja inscrit";
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TRAITEMENTA</title>
    <link rel="stylesheet" href="" />
  </head>
  <body>
    <div class="container">
      <div class="nom">
      <?php
        if(!empty($_POST['nom'])){
        echo $_POST['nom'];
        } else {
        echo 'Remplir ce champ';
        }
      ?>
        </div>

        <div class="prenom">
        <?php
          if(!empty($_POST['prenom'])){
          echo $_POST['prenom'];
          } else {
          echo 'Remplir ce champ';
          }
        ?>
          </div>

          <div class="adresse">
          <?php
          if(!empty($_POST['adresse'])){
          echo $_POST['adresse'];
          } else {
          echo 'Remplir ce champ';
          }
          ?>

          <div class="code_postal">
            <?php
          if(!empty($_POST['cp'])){
          echo $_POST['cp'];
          } else {
          echo 'Remplir ce champ';
          }
          ?>

          <div class="ville">
            <?php
          if(!empty($_POST['ville'])){
          echo $_POST['ville'];
          } else {
          echo 'Remplir ce champ';
          }
          ?>

          <div class="email">
            <?php
          if(!empty($_POST['email'])){
          echo $_POST['email'];
          } else {
          echo 'Remplir ce champ';
          }
          ?>
          </div>

          <div class="login">
          <?php
          if(!empty($_POST['login'])){
          echo $_POST['login'];
          } else {
          echo 'Remplir ce champ';
          }
          ?>
          </div>

          <div class="password">
          <?php
          if(!empty($_POST['pw'])){
          echo $_POST['pw'];
          } else {
          echo 'password';
          }
          ?>

          <div class="vpassword">
          <?php
          if(!empty($_POST['pw'])){
          echo $_POST['pw'];
          } else {
          echo 'password';
          }
          ?>

  
  </div>
 </body>
</html>
