<?php 

    include("bdd.php"); 
    $reponse = inscriptionMembre();
    echo json_encode($reponse);
?>