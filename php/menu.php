<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="liste_annonces.php">Liste des annonces</a></li>
            <li><a href="liste_dynamique.php">Recherche/Ajout d'annonces</a></li>
            <?php   
                if (!isset($_SESSION['login'])) {
                    echo "<li><a href=\"inscription.php\">Inscription</a></li>";
                }
            ?>
        </ul>
    <img style="float:right; padding-right:10px;" src="images/logodegeu1.png" width="100px">
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>