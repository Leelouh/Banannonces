<?php 

    include("bdd.php"); 

    $repCo = connexion();
    echo json_encode($repCo);

?>