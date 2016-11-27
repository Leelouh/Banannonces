<?php 
    
    include("bdd.php"); 

	//$stockVar = $_REQUEST['rechercher'];

    $jsonForm=get_ann();
    //echo $stockVar;

    //echo $_REQUEST['rechercher'];
	echo json_encode($jsonForm);


?>