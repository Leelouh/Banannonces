<?php
    session_start();
?>

<!doctype html>

<html>
	<head>
		<title>Banannonces</title>
  		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, target-densitydpi=device-dpi"/>
        <script src="js/jquery-3.1.1.min.js"></script>
        <!--INSERTION BOOTSTRAP-->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="bootstrap-social-gh-pages/bootstrap-social.css"  media="screen,projection"/> 
        <link type="text/css" rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css"/>

	</head>

	<body>
		<?php include("php/bdd.php"); ?> 

		<header>
			<?php include("php/entete.php"); ?>
		</header>


		<nav>
			<?php include("php/menu.php"); ?>
		</nav>

		
		<section id="fond">
            <div id="fondTitre"><div id="titre">Liste des annonces</div></div>
            <br>
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
                    }
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
                    echo "<div style=\"height:200px; padding-right:5px;\"><div class=\"map\">{$arrayAnnonces[7]},{$arrayAnnonces[8]}</div></div>";
					echo "</div>";//ferme corpsAnnonce

					echo "<div class=\"piedAnnonce\">";
					echo "<div class=\"dateAjout\">{$arrayAnnonces[9]}</div>";
					echo "<div class=\"nomVendeur\">{$arrayAnnonces[4]}</div>";
                    //echo "<div class=\"btn btn-info btn-lg\"><span class=\"glyphicon glyphicon-trash\"></span> Trash</div>";
					echo "</div>";//ferme piedAnnonce

                    
					echo "</div><br>"; // ferme le anno

				}
			?>
		</section>

		<footer>
			<?php include("php/pied.php"); ?>		
		</footer>

        <script>
            function initMap() {
                $('.map').each(function (index, Element) {
                    var coords = $(Element).text().split(",");
                    if (coords.length != 2) {
                        $(this).display = "none";
                        return;
                    }
                    else {
                        var uluru = {lat: parseFloat(coords[0]), lng: parseFloat(coords[1])};
                        var map = new google.maps.Map(Element, {
                          zoom: 10,
                          center: uluru
                        });
                        var marker = new google.maps.Marker({
                          position: uluru,
                          map: map
                        });

                    }

                });
            }
        </script>
        <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAxF2J35RXDJzQaiWsc3rumWi_AIvkzpU&callback=initMap">
    </script>
	</body>

</html>