<?php
    session_start();
?>

<!doctype html>

<html>
	<head>
		<title>Banannonces</title>
  		<meta charset="UTF-8">


		<!-- INSERTION BOOTSTRAP -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="bootstrap-social-gh-pages/bootstrap-social.css"  media="screen,projection"/>
        
        <link type="text/css" rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css"/>
        
        <script src="js/nouveau_membre.js"></script>
	</head>

	<body>
		<header>
			<?php include("php/entete.php"); ?>
		</header>


		<nav>
			<?php include("php/menu.php"); ?>
		</nav>

        <div class="container" style="width:30%;">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h2 class="title">Formulaire d'inscription</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form id="newMember" class="form-horizontal" method="post" action="#">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Nom</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="name" id="name"  placeholder="Votre nom"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Votre adresse e-mail"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="passwordIns" class="cols-sm-2 control-label required">Mot de passe</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="passwordIns" id="passwordIns" placeholder="Votre mot de passe"/>
								</div>
							</div>
						</div>
                        
                        <div id="checkMDP"></div>
                        
                        <div class="form-group">
							<label for="passwordIns2" class="cols-sm-2 control-label required">Confirmer votre mot de passe</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="passwordIns2" id="passwordIns2" placeholder="Retaper mot de passe"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="choix" class="cols-sm-2 control-label">Comment avez-vous connu B.O.U.A.T. ?</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-globe fa-lg" aria-hidden="true"></i></span>
									<select class="form-control" name="choix" id="choix"  placeholder="Faites un choix, merde !">
                                    <option>-select-</option>
                                    <option>Par un ami</option>
                                    <option>Par une amie</option>
                                    <option>Par ma soeur</option>
                                    <option>Par mon frère</option>
                                    <option>Par amour</option>
                                    <option>Google it</option>
                                    </select>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="button" id="inscription" class="btn btn-primary btn-lg btn-block login-button">S'enregistrer</button>
                            <br>
						</div>
					</form>
				</div>
			</div>
		</div>
		

		<footer>
			<?php include("php/pied.php"); ?>

		</footer>

  		

		
	</body>

</html>