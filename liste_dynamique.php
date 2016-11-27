<!doctype html>

<html>
	<head>
		<title>Banannonces</title>
  		<meta charset="UTF-8">
  		<script src="js/liste_dynamique.js"></script>

  		<!--BOOTSTRAP-->
<!-- Latest compiled and minified CSS -->
<!--<link rel="stylesheet" href="css/bootstrap.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"  media="screen,projection"/>

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
	</head>

	<body>
		<header>
			<?php include("php/entete.php"); ?>
		</header>


		<nav>
			<?php include("php/menu.php"); ?>
		</nav>
		<br>
		<div id="annoncesDyn">

			<label for="recherche">Mots-Clef :</label><br>
			<input type="text" id="recherche">
			<button id="affichage" type="submit" class="btn btn-primary">Recherche</button>
		
		</div>
		<br>
		<footer>
			<?php include("php/pied.php"); ?>

		</footer>

		
	</body>

</html>