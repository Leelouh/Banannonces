<?php
    session_start();
?>


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
        <link type="text/css" rel="stylesheet" href="bootstrap-social-gh-pages/bootstrap-social.css"  media="screen,projection"/>
        
        <link type="text/css" rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css"/>

  
	</head>

	<body>
		<header>
			<?php include("php/entete.php"); ?>
		</header>

        
		<nav>
			<?php include("php/menu.php"); ?>
		</nav>
        
   
            
		
        <section id="fond"><br><div id="rechAnn"></div></section>  
		<div id="annoncesDyn">
            <fieldset>
            <legend>Rechercher une annonce</legend>
            <form id="filtre">
                <!--<label for="recherche">Mots-Clef :</label><br>-->
                <input type="text" id="recherche" name="recherche">
            </form><br>
			<button id="affichage" type="submit" class="btn btn-primary">Recherche</button>
            </fieldset>
		</div>
        
        <br>
        <!--<div id="nouvelAdd" style="padding:10px; width:60%; margin:auto;">-->
        <div id="nouvelAdd">
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
                
            </form>
                
            <button id="addAnn" type="submit" class="btn btn-primary">Ajouter annonce</button><br>
            </fieldset>
        </div>
        
        <br>
        
            
        
        
		<footer>
			<?php include("php/pied.php"); ?>
		</footer>

    </body>
    

</html>