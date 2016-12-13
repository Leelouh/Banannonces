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
        ret += '<div class="categorie">' + annonce.categorie + '<div id="poubelle"><button type="button" class="poubelle btn btn-info btn-lg" data-id="'+annonce.ident+'"><span class="glyphicon glyphicon-trash"></span> Supprimer</button></div></div>';
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


	function afficheDonnees(){
        
		//DEBUGrefresh_names();
		var rechercher = document.getElementById("filtre");
		var search = new FormData(rechercher);
		var request = new XMLHttpRequest();

		request.addEventListener('load', function (data) {

			var ret = JSON.parse(data.target.responseText);
			var new_html = '';
			for (var i = 0; i < ret.annonces.length; i++) {
				new_html += build_annonce_html(ret.annonces[i]);
			}
			document.querySelector('#rechAnn').innerHTML = new_html;
            //DEBUGdocument.getElementById("poubelle").addEventListener("click", supprAnnonce);
            var classname = document.getElementsByClassName("poubelle");
            for (var i=0; i<classname.length;i++){
                classname[i].addEventListener("click", supprAnnonce);
            }             
		});
        
		request.open("POST", "php/get_annonces.php");
		request.send(search);

	}
    
    
    function refreshDonnees() {
        
        var request = new XMLHttpRequest();
        request.addEventListener('load', function (data) {
            var ret = JSON.parse(data.target.responseText);
            var new_html = '';
            for (var i = 0; i < ret.annonces.length; i++) {
                new_html += build_annonce_html(ret.annonces[i]);
            }
            document.querySelector('#rechAnn').innerHTML = new_html;
            //DEBUGdocument.getElementById("poubelle").addEventListener("click", supprAnnonce);
            var classname = document.getElementsByClassName("poubelle");
            for (var i=0; i<classname.length;i++){
                classname[i].addEventListener("click", supprAnnonce);
            }
        });
            request.open("POST", "php/get_annonces.php");
            request.send();
	}

    
    function ajouteAnnonce(){
       //DEBUGconsole.log("hello");
        var ajouter = document.getElementById("newAdd");
        var add = new FormData(ajouter);
        var request = new XMLHttpRequest();
        request.open("POST", "php/new_annonces.php");
        request.send(add);
        refreshDonnees();
    }
    
    
    function supprAnnonce(){
        //récupérer ID
        //DEBUGconsole.log("suppressiiiiion");
        var supprimer = this.getAttribute('data-id');
        var delAnn = new FormData();
        delAnn.append('supprimer', supprimer); //clé+valeur
        var request = new XMLHttpRequest();
        
        request.addEventListener('load', function(data){
            var ret = JSON.parse(data.target.responseText);
            if (ret==false){
                alert("Veuillez-vous identifier pour supprimer une annonce");
            }
        });
        
        request.open("POST", "php/delete_annonces.php");
        request.send(delAnn);
        refreshDonnees();
    }
    
    
	document.getElementById("affichage").addEventListener("click",afficheDonnees);
    document.getElementById("addAnn").addEventListener("click", ajouteAnnonce);
    document.getElementById("affichageTout").addEventListener("click", refreshDonnees);
});

