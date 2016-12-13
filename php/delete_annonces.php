<?php 

    include("bdd.php"); 

    $reponse = deleteAnnonce();
    echo json_encode($reponse); //renvoie au js

?>