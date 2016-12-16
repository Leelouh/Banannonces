<!--CODE A ENVOYER A mathias.chouet@umontpellier.fr -->

<?php
    session_start();
?>

<!doctype html>

<html>
	<head>
		<title>Banannonces</title>
  		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, target-densitydpi=device-dpi">

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

        
		<p style="width:60%; text-align: center; margin:auto; padding-top:10px; padding-bottom:10px;">
            <br><br>
            <FONT size="4">Bonjour et bienvenue sur <b>Banannonces Upon a Time</b>, appelé plus communement <b>B.O.U.A.T.</b>.</FONT>
            <br><br>
            Sur le site <a href='index.php'>banannonces.fr</a>, passez des <a href='liste_dynamique.php'>annonces gratuites</a> et sans commission. Vous pouvez <a href='liste_dynamique.php'>consulter des petites annonces</a> de particuliers et de professionnels partout en France, que vous cherchiez des annonces immobilières, des voitures d'occasion, des offres d'emploi, des meubles, du matériel électronique ou tout autre type de produits d'occasion. 
            <br><br><br>
            <img style="padding-right:10px; opacity:0.5%;" src="images/logodegeu1.png" width="400px"> 
            <br><br><br>
        </p>   

		<footer>
			<?php include("php/pied.php"); ?>

		</footer>

  		
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>	
	</body>

</html>