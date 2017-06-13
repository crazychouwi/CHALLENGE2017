<DOCTYPE! HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>connexion</title>
<?php include 'includes/header.php';?>
 <link href="assets/css/connection.css" type="text/css" rel="stylesheet">
  
  </head>
  <body>
<form method="post" action=".php" enctype="multipart/form-data">

<div  alt="logo"><img src="assets/img/logoSimplon.png" id="logo"></div>

<div class="connexion">
   <h1>Sign In</h1>

<label for="identifiant">identifiants :</label><br/>
<input type="identifiant" name="identifiant" id="identifiant" /><br/>

<label for="email">Email :</label><br/>
<input type="email" name="email" id="email" /><br/>

<label for="">password :</label><br/>
<input type="password" name="pw" id="pw"><br/>
<div id="forgot"><img src="assets/img/pt.jpg" id="point"><a href="forgot">forgot your password?</a></div>

<input id="button" type="submit" value="Sign In">
</div>










<?php include 'includes/footer.php';?>
</body>
</html>
