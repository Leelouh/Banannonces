<html>
	<head>
		<title>Banannonces</title>
  		<meta charset="UTF-8">
  		<link rel="stylesheet" href="style.css" />

  		<script type="text/javascript" src=""></script>
  		
	</head>

	<body>
		<?php include("bdd.php"); ?> 

		<header>
			<?php include("entete.php"); ?>
		</header>


		<nav>
			<?php include("menu.php"); ?>
		</nav>

		<h1>Liste des annonces</h1>

		<section>
			<?php
				$bdd=connexionbd();
				$tableauAnnonces=requete($bdd, "select * from annonces");

				//entry=>chaque annonce ; valeur=>chaque champ de l'annonce(id, etc)
				foreach ($tableauAnnonces as $entry){
					echo "<div id=\"anno\">";
					foreach ($entry as $valeur) {
						echo $valeur;
						echo "<br>";
					}
					echo "</div>";
					echo "<br>";
				}

			?>
		</section>

		<footer>
			<?php include("pied.php"); ?>
		</footer>


		
	</body>

</html>