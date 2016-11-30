document.addEventListener('DOMContentLoaded', function () { // après chargement

	function build_annonce_html(annonce) {
		var ret = '';
		ret += '<div class="annonceGlobal">';
		ret += '<div class="enteteAnnonce">';
		ret += '<div class="id">' + annonce.ident + '</div>';
		ret += '<div class="titre">' + annonce.titre + '</div>';
		ret += '<div class="prix">' + annonce.prix + '</div>';
		ret += '</div>';//ferme enteteAnnonce
		ret += '<div class="corpsAnnonce">';
		ret += '<div class="categorie">' + annonce.categorie + '</div>';
		ret += '<div class="photo-desc">';
		ret += '<div class="photo"><img height="150px" src="' + annonce.photo + '"></div>';
		ret += '<div class="description">' + annonce.descript + '</div>';
		ret += '</div>';//ferme photo-desc
		ret += '<div class="rdv_lat">' + annonce.rdv_lat + '</div>';
		ret += '<div class="rdv_lon">' + annonce.rdv_lon + '</div>';
		ret += '</div>'; //ferme corpsAnnonce
		ret += '<div class="piedAnnonce">';
		ret += '<div class="dateAjout">' + annonce.dateAjout + '</div>';
		ret += '<div class="nomVendeur">' + annonce.nomVendeur + '</div>';
		ret += '</div>';//ferme piedAnnonce
		ret += '</div>';//ferme annonceGlobal
		ret += '<br>';//espace entre deux annonces
		return ret;
	}


	function afficheDonnees() {

		//refresh_names();
		var rechercher = document.getElementById("filtre");
		var search = new FormData(rechercher);
		var request = new XMLHttpRequest();

		
		request.addEventListener('load', function (data) {

			var ret = JSON.parse(data.target.responseText);

			var new_html = '';

			for (var i = 0; i < ret.annonces.length; i++) {
				new_html += build_annonce_html(ret.annonces[i]);
			}
            
			document.querySelector('#annoncesDyn').innerHTML = new_html;

		});

		
		request.open("POST", "php/get_annonces.php");
		request.send(search);

	}



	document.getElementById("affichage").addEventListener("click",afficheDonnees);
	//afficheDonnees();

});

