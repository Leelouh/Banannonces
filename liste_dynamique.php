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
            <form id="filtre">
                <label for="recherche">Mots-Clef :</label><br>
                <input type="text" id="recherche" name="recherche">
            </form><br>
			<button id="affichage" type="submit" class="btn btn-primary">Recherche</button>
		
		</div>
		<br>
        
        <div id="newAdd" style="padding:10px; width:60%; margin:auto;">
            <fieldset>
            <legend>Ajouter une nouvelle annonce</legend>
            <form id="newAdd">
                <label for="nomVendeur">Nom du vendeur :</label><br>
                <input type="text" id="nomVendeur" name="nomVendeur"><br>
                <label for="titre">Titre de l'annonce :</label><br>
                <input type="text" id="titre" name="titre"><br>
                <label for="cat">Catégorie :</label><br>
                <input type="text" id="cat" name="cat"><br>
                <label for="description">Description :</label><br>
                <input type="textarea" id="description" name="description"><br>
                <label for="photo">Url de l'image :</label><br>
                <input type="text" id="photo" name="photo"><br>
                <label for="prix">Prix :</label><br>
                <input type="text" id="prix" name="prix"><br>
                <label>Point de rendez-vous :</label><br>
                <label for="lon">longitude :</label>
                <input type="text" id="lon" name="lon">
                <label for="lat">latitude :</label>
                <input type="text" id="lat" name="lat"><br><br>
                <button id="addAnn" type="submit" class="btn btn-primary">Ajouter annonce</button><br>
            </form>
            </fieldset>
        </div>
        <br>
		<footer>
			<?php include("php/pied.php"); ?>
		</footer>

		
	</body>

</html>