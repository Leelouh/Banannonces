<?php

// cette fonction vous connecte à la base de données et retourne
// un objet grâce auquel vous allez effectuer des requêtes SQL
function connexionbd() {

	// $bdd = new PDO('mysql:host=localhost;dbname=Clavardage;unix_socket=/tmp/mysql.sock', 'Marianne', 'xxxx');

	// A MODIFIER : spécifiez votre login et votre mot de passe ici
	$host = "localhost";
	$username = "flo";
	$password = "avocado7";
	$dbname = "banannonces";

	// chaîne de connexion pour PDO (ne pas modifier)
	$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8;";

	// connexion au serveur de bases de données
	$bd = new PDO($dsn, $username, $password);

	return $bd;
}

// cette fonction effectue une requête SQL. On doit lui fournir
// l'objet base de données et la requête
function requete($bd, $req) {

	// appel de la méthode query() sur l'objet base de données :
	// la requête est traitée par le serveur et retourne un pointeur de resultat
	$resultat = $bd->query($req);

	// on demande à ce pointeur d'aller chercher toutes les données de résultat
	// d'un coup - on obtient un tableau de tableaux associatifs (un par ligne de la table)
	// Note : dans le cas d'une insertion, on ne récupère pas le resultat
	if ($resultat) {
		$tableau = $resultat->fetchAll(PDO::FETCH_ASSOC);	
		// on retourne ce tableau
		return $tableau;
	}
}

// cree la table qui stockera les petites annonces
// - appeler cette fonction une seule fois au début de votre projet
function creation_table() {
	$maBd = connexionbd();
	$maRequeteCreation = "CREATE TABLE annonces (id int AUTO_INCREMENT PRIMARY KEY, titre varchar(100), description text, categorie varchar(40), nom_vendeur varchar(60), prix int, photo varchar(255), rdv_lat float, rdv_lon float, date_ajout timestamp DEFAULT CURRENT_TIMESTAMP) CHARACTER SET UTF8";
	requete($maBd, $maRequeteCreation);
}

// insère des données d'exemple dans la base
// - appeler cette fonction une seule fois au début de votre projet
function insertion_exemples() {
	$maBd = connexionbd();
	$maRequeteInsertion = "INSERT INTO annonces VALUES "
		. "(DEFAULT, 'Cafetière en porcelaine, bon état général', 'Vends cafetière en procelaine italienne des années 60, en bon état.<br>Peu servi, contenance 60cl.<br>15€ ferme, à venir retirer chez moi.', 'cuisine', 'bogoss_34', 15, 'http://www.villeroy-boch.com/fileadmin/picdb/produkte/tk/large/23950100-preview.jpg', 43.632841, 3.8637333, DEFAULT),"
		. "(DEFAULT, 'DVD TimeCop avec Jean-Claude Van Damme', 'Vends 1€ symbolique ce film culte en DVD, encore sous blister.', 'DVD / Films', 'Martine Dubois', 1, 'https://fanart.tv/fanart/movies/8831/moviedisc/timecop-53e23655c9ebd.png', 43.617857, 3.8573201, DEFAULT),"
		. "(DEFAULT, 'Cheap Rolex watches', 'Rolex watch, incredible prices !<br><br>SPAM SPAM SPAM SPAM SPAM SPAM SPAM, SPAM SPAM SPAM SPAM SPAM SPAM<br>SPAM SPAM<br><br>SPAM !', 'bijoux', 'spam spam', 40, 'http://www.boutique-vintage.com/1139-3740-large/petite-montre-mickey-bleue-et-grise-80-s.jpg', 43.5465071, 3.8287231, DEFAULT),"
		. "(DEFAULT, 'Villa 220m² avec piscine et jardin', 'Vends villa années 2000, de plain pied, beaux quartiers proche Montpellier.<br>Toiture rénovée en 2014, ampoules changées à la main avant-hier.<br>Petits travaux à prévoir suite à l''explosion de la citerne de gaz naturel.<br>340 000 euros à débattre. Contacter Jean au 06 66 66 66 66 entre 19h31 et 19h32.', 'immobilier', 'Jean Talus', 340000, 'http://www.photomaison.net/wp-content/uploads/2015/11/image-maison-lego-5.jpg', 43.5732676, 3.903428, DEFAULT);"
	;
	requete($maBd, $maRequeteInsertion);
}

// vide la table de toutes ses donnees
// - appeler uniquement si besoin de faire le ménage
function vidage_table() {
	$maBd = connexionbd();
	$maRequeteVidage = "TRUNCATE TABLE annonces";
	requete($maBd, $maRequeteVidage);
}


/////////////////////////AJOUT DE FONCTION/////////////////////////

//Creation tables
function tableMembre(){
    $bdd=connexionbd();
    $requeteCreation = "CREATE TABLE connexion (id INT AUTO_INCREMENT PRIMARY KEY, user VARCHAR(20), password VARCHAR(255));";
    requete($bdd,$requeteCreation);
}

function get_ann(){ //Recherche annonce
	$bdd=connexionbd();
	$tableauAnnonces=requete($bdd, "select * from annonces where nom_vendeur like '%{$_REQUEST['recherche']}%' or categorie like '%{$_REQUEST['recherche']}%' or description like '%{$_REQUEST['recherche']}%' or titre like '%{$_REQUEST['recherche']}%'");
	
    $data=array('annonces' => array());
 
    foreach ($tableauAnnonces as $val) {

        $data['annonces'][] = Array ('ident' => $val['id'], 
                                    'titre' => $val['titre'], 
                                    'descript' => $val['description'], 
                                    'categorie' => $val['categorie'],
                                    'nomVendeur' => $val['nom_vendeur'],
                                    'prix' => $val['prix'],
                                    'photo' => $val['photo'],
                                    'rdv_lat' => $val['rdv_lat'],
                                    'rdv_lon' => $val['rdv_lon'],
                                    'dateAjout' => $val['date_ajout']); 
    }

    return $data;

}

function addAnnonce(){ //Ajout d'annonce
    $bdd=connexionbd();
    $requeteInsertion = "INSERT INTO annonces VALUES "
		. "(DEFAULT, '{$_REQUEST['titre']}', '{$_REQUEST['description']}', '{$_REQUEST['cat']}', '{$_REQUEST['nomVendeur']}', {$_REQUEST['prix']}, '{$_REQUEST['photo']}', {$_REQUEST['lat']}, {$_REQUEST['lon']}, DEFAULT);";
    //DEBUG echo $requeteInsertion;    
    $machin=requete($bdd, $requeteInsertion);
    var_dump($machin); //affiche valeur + le type ds réponse php
    
}

function deleteAnnonce(){ //suppression Annonce
    $bdd=connexionbd();
    session_start();
    $requeteSuppression = "DELETE FROM annonces WHERE id = {$_REQUEST['supprimer']};";
    //DEBUG echo $requeteSuppression;
    if (isset($_SESSION['login'])) {
        requete($bdd, $requeteSuppression);
        return true;
    }
    else {
        return false;
    }
    
}



function connexion() { 
    $bdd = connexionbd();
    $login = $_REQUEST['login'];
    $password = sha1($_REQUEST['password']); 
    $requeteConnexion = "SELECT id FROM connexion WHERE user = '{$login}' AND password = '{$password}';";
    $result = requete($bdd, $requeteConnexion);
    if (!$result) {
        return false;
    }
    else {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['login'] = $login;
        return true;
        header("Refresh:0"); // rafraichit la page directement
    }
}

function deconnexion(){
    session_start(); //rappelle que session est ouverte #débile, sinon, impossible de rafraichir la page
    session_destroy();    
    header("Refresh:0");
}

function inscriptionMembre(){
    $bdd=connexionbd();
    
    //test si un membre est déjà présent dans la bdd avec ce login
    $requeteTest = "SELECT id FROM connexion WHERE user = '{$_REQUEST['name']}';";
    $resultat = requete($bdd, $requeteTest);
    
    if ($resultat) {
        return false;
    }
    
    else {
        $mdpHash = sha1($_REQUEST['passwordIns']);
        $requeteInsertion = "INSERT INTO connexion VALUES "
		. "(DEFAULT, '{$_REQUEST['name']}', '{$mdpHash}');";
   
        requete($bdd, $requeteInsertion);
        return true;
    }
}

?>
