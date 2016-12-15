<?php
    session_start();
?>


<!doctype html>

<html>
	<head>
		<title>Banannonces</title>
  		<meta charset="UTF-8">
  		<script src="js/liste_dynamique.js"></script>
        <script src="js/jquery-3.1.1.min.js"></script>

  		<!--INSERTION BOOTSTRAP-->
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
                <input type="text" class="form-control" id="recherche" name="recherche">
            </form><br>
			<button id="affichage" type="submit" class="btn btn-primary">Recherche</button>
                <br><br>
                <button id="affichageTout" class="btn btn-success">Afficher toutes les annonces</button>
            </fieldset>
		</div>
        
        
        <br>
        <div id="nouvelAdd">
            <fieldset>
            <legend>Ajouter une nouvelle annonce</legend>
            <form id="newAdd">
                <label for="nomVendeur">Nom du vendeur :</label><br>
                <input type="text" id="nomVendeur" class="form-control" name="nomVendeur"><br>
                <label for="titreAnn">Titre de l'annonce :</label><br>
                <input type="text" class="form-control" id="titreAnn" name="titre"><br>
                <label for="cat">Catégorie :</label><br>
                <select class="form-control" name="cat" id="cat"  placeholder="Catégorie">
                    <option>-select-</option>
                    <option>Maison</option>
                    <option>Véhicule</option>
                    <option>Emploi</option>
                    <option>Multimédia</option>
                    <option>Animaux</option>
                    <option>Services</option>
                    <option>Autres</option>
                </select><br>
                <label for="description">Description :</label><br>
                <textarea rows="4" cols="50" class="form-description form-control"  id="description" name="description"></textarea><br>
                <label for="photo">Url de l'image :</label><br>
                <input type="text" class="form-control" id="photo" name="photo"><br>
                <label for="prix">Prix :</label><br>
                <input type="text" class="form-control" id="prix" name="prix"><br>
                <label>Point de rendez-vous :</label><br>
                <label for="lon" style="color:grey; font-size:smaller;">Longitude :</label>
                <input type="text" class="form-control" id="lon" name="lon">
                <label for="lat" style="color:grey; font-size:smaller;">Latitude :</label>
                <input type="text" class="form-control" id="lat" name="lat"><br><br>
                
            </form>
                
            <button id="addAnn" type="submit" class="btn btn-primary">Ajouter annonce</button><br>
            </fieldset>
        </div>
        
        <br>
        
		<footer>
			<?php include("php/pied.php"); ?>
		</footer>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAxF2J35RXDJzQaiWsc3rumWi_AIvkzpU"></script>
    </body>
    

</html>