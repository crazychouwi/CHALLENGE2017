
      <?php

      try
      {
          $bdd = new PDO('mysql:host=localhost;dbname=challenge2017;charset=utf8', 'root', 'mayrai66!!');
          $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      catch(Exception $e)
      {
              die('Erreur : '.$e->getMessage());
      }
      $req = $bdd->prepare('SELECT password FROM formateurs WHERE email = :email');
      $req->execute(array('email' => $_POST['email']));
      $result = $req->fetch(PDO::FETCH_ASSOC);
      $hash = $result['password'];
      $pass = $_REQUEST['password'];
      if(password_verify($pass, $hash)){
      echo 'mot de passe valide !';
      header('Location: connexion.php');
      }else{
      echo 'mot de passe invalide';
      }
      ?>
    <!DOCTYPE HTML>
    <html>
    <head>
      <meta charset="utf-8">
      <title>connexion</title>
      <link href="assets/css/connection.css" type="text/css" rel="stylesheet">

    </head>
      <body>
        <div class="header">
          <img src="assets/img/logoSimplon.png" alt="logoSimplon">
        </div>



    <!-- <div  alt="logo"><img src="assets/img/logoSimplon.png" id="logo"></div> -->
    <p><a href="accountF.php">1ère inscription</a></p>
    <div class="connexion">
    <form method="post" action="connexionF.php" enctype="multipart/form-data">

    <label for="login">Login :</label><br/>
    <input type="login" name="login" id="login" /><br/>

    <label for="email">Email :</label><br/>
    <input type="email" name="email" id="email" /><br/>

    <label for="">Password :</label><br/>
    <input type="password" name="pw" id="pw"><br/>
    <div id="forgot"><img src="assets/img/pt.jpg" id="point"><a href="forgot">mot de passe oublié?</a></div>

    <input id="button" type="submit" value="Sign In">

    </form>
    </div>

    <div class="footer">
     <?php
        include("includes/footer.php");
       ?>
    </div>
    </body>
    </html>
