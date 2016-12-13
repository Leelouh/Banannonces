<?php 
    if (isset($_SESSION['login'])) {
         echo "<div class=\"navbar-form navbar-right\">";
         //echo "<marquee direction\"left\">Bonjour {$_SESSION['login']}</marquee>";
        echo "Bonjour {$_SESSION['login']}";
        //echo "<br>";
        echo "<button style=\"margin-left:15px;\" id=\"deconnexionBTN\" class=\"btn btn-primary\">Déconnexion</button>";
        echo "<script type=\"text/javascript\" src=\"js/deconnexion.js\"></script>";
        echo "</div>";
    }
    else {
        echo "<form id=\"signin\" class=\"navbar-form navbar-right\" role=\"form\">";
            echo "<div class=\"input-group\">";
                echo "<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>";
                echo "<input id=\"login\" type=\"login\" class=\"form-control\" name=\"login\" value=\"\" placeholder=\"Nom d'utilisateur\">";
            echo "</div>";
            echo "<div class=\"input-group\">";
                echo "<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>";
                echo "<input id=\"password\" type=\"password\" class=\"form-control\" name=\"password\" value=\"\" placeholder=\"Mot de passe\">";
            echo "</div>";

            echo "<button id=\"connexionBTN\" class=\"btn btn-primary\">Login</button>";
        echo "</form>";
        echo "<script type=\"text/javascript\" src=\"js/connexion.js\"></script>";
    }
?>
<div class = "page-header">
   
    
   <h1>
      Banannonces
      <small>Upon a Time</small>
   </h1>
   
</div>

<!-- logo -->