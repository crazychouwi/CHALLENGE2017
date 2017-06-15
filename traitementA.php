<?php
session_start();
$_SESSION['nom']=$_POST['nom'];
print_r($_SESSION);

$_SESSION['admin'] = true;
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

          <div class="date_de_naissance">
            <?php
          if(!empty($_POST['ddn'])){
          echo $_POST['ddn'];
          } else {
          echo 'Remplir ce champ';
          }
          ?>

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

          <div class="tel">
          <?php
          if(!empty($_POST['tel'])){
          echo $_POST['tel'];
          } else {
          echo 'Remplir ce champ';
          }
          ?>
          </div>

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
    <a href="secretA.php">valider</a>
    </div>
  </div>
 </body>
</html>
