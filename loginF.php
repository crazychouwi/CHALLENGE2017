<DOCTYPE! HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>connexion</title>
 <link href="assets/css/connection.css" type="text/css" rel="stylesheet">

  </head>
  <body>
    <div class="header">
            <?php
               include("includes/header.php");
              ?>
       </div>
<form method="post" action="connexion.php" enctype="multipart/form-data">

<!-- <div  alt="logo"><img src="assets/img/logoSimplon.png" id="logo"></div> -->
<p><a href="account.php">1ère inscription</a></p>
<div class="connexion">


<label for="identifiant">identifiant :</label><br/>
<input type="identifiant" name="identifiant" id="identifiant" /><br/>

<label for="email">Email :</label><br/>
<input type="email" name="email" id="email" /><br/>

<label for="">password :</label><br/>
<input type="password" name="pw" id="pw"><br/>
<div id="forgot"><img src="assets/img/pt.jpg" id="point"><a href="forgot">mot de passe oublié?</a></div>

<input id="button" type="submit" value="Sign In">
</div>










<div class="footer">
 <?php
    include("includes/footer.php");
   ?>
</div>
</body>
</html>
