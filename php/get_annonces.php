<?php 

    include("bdd.php"); 

    $jsonForm=get_ann();
	echo json_encode($jsonForm);

?>