<!doctype html>

<html>
	<head>
		<title>Banannonces</title>
  		<meta charset="UTF-8">

<!-- Latest compiled and minified CSS -->
<!--<link rel="stylesheet" href="css/bootstrap.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"  media="screen,projection"/>

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  		
	</head>

	<body>
		<?php include("php/bdd.php"); ?> 

		<header>
			<?php include("php/entete.php"); ?>
		</header>


		<nav>
			<?php include("php/menu.php"); ?>
		</nav>

		<h3 class="header center red-text">Liste des annonces</h3>

		<section>
			<?php
				$bdd=connexionbd();
				$tableauAnnonces=requete($bdd, "select * from annonces");

				//entry=>chaque annonce ; valeur=>chaque champ de l'annonce(id, etc)

				foreach ($tableauAnnonces as $entry){
					echo "<div class=\"annonceGlobal\">";
					$arrayAnnonces = array();
					//ligne
					foreach ($entry as $valeur) {
						$arrayAnnonces[]=$valeur;
						//echo $valeur;
						//echo "<br>";
					}
					
					//echo "<br>";
					//echo $arrayAnnonces[0];

					echo "<div class=\"enteteAnnonce\">";
					echo "<div class=\"id\">{$arrayAnnonces[0]}</div>";
					echo "<div class=\"titre\">{$arrayAnnonces[1]}</div>";
					echo "<div class=\"prix\">{$arrayAnnonces[5]}</div>";
					echo "</div>";//ferme enteteAnnonce

					echo "<div class=\"corpsAnnonce\">"; //ouvre cA
					echo "<div class=\"categorie\">{$arrayAnnonces[3]}</div>";
					echo "<div class=\"photo-desc\">"; //ouvre pd
					echo "<div class=\"photo\"><img height=\"150px\" src=\"{$arrayAnnonces[6]}\"></div>";
					echo "<div class=\"description\">{$arrayAnnonces[2]}</div>";
					echo "</div>";//ferme photo-desc
					echo "<div class=\"rdv_lat\">{$arrayAnnonces[7]}</div>";
					echo "<div class=\"rdv_lon\">{$arrayAnnonces[8]}</div>";
					echo "</div>";//ferme corpsAnnonce

					echo "<div class=\"piedAnnonce\">";
					echo "<div class=\"dateAjout\">{$arrayAnnonces[9]}</div>";
					echo "<div class=\"nomVendeur\">{$arrayAnnonces[4]}</div>";
					echo "</div>";//ferme piedAnnonce


					echo "</div><br>"; // ferme le anno

				}

			?>
		</section>

		<footer>
			<?php include("php/pied.php"); ?>

					<!-- Utilisation Materialize -->
		<!--Import jQuery before materialize.js-->
		
		</footer>


		
	</body>

</html>