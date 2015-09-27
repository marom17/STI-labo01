<?php 
//  ***************************************************************************
/*
 * Auteur : Romain Maillard
 * Date   : 26.09.2015
 * But: Permet l'administration des utilisateurs
 */
session_start();

//  Inclusion fichier de fonction. 
require_once "include/fonction.php";

//  Vérifie si l'utilisateur est déjà connecté sinon le redirige vers signin.php.
if (!isConnected()) {
  header('Location: signout.php');
}

//  ***************************************************************************
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="dist/favicon.ico">

  <title>STI Mail - Administration</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="standard-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

	<?php
	include 'header.php';
	?>
	
		<br/><br/><br/>
	<div class="container">
	<footer>
        <p>&copy; Laurent Girod & Romain Maillard - 2015</p>
      </footer>
</div>
</body>
</html>