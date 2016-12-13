<ul class="nav nav-tabs">
	<li><a href="index.php">Accueil</a></li>
	<li><a href="liste_annonces.php">Liste des annonces</a></li>
	<li><a href="liste_dynamique.php">Recherche/Ajout d'annonces</a></li>
     <?php   
        if (isset($_SESSION['login'])) {
        }
    else {
        echo "<li><a href=\"inscription.php\">Inscription</a></li>";
    }
    ?>
	
    <img style="float:right; padding-right:10px;" src="images/logodegeu1.png" width="100px"> 
</ul>