document.addEventListener('DOMContentLoaded', function () { // après chargement

    function nouveauMembre() {
        
        if (document.getElementById("passwordIns").value != document.getElementById("passwordIns2").value){
            document.querySelector('#checkMDP').innerHTML = "Les mots de passe ne correspondent pas";
        }
        
        else { 
            var inscriptionData = document.getElementById("newMember");
            var formInscription = new FormData(inscriptionData);
            var requete = new XMLHttpRequest();
            
            requete.addEventListener('load', function(data) {
                //event.preventDefault(); // ne pas recharger la page
                var ret = JSON.parse(data.target.responseText);
                if (ret == false) {
                    document.querySelector('#checkLGN').innerHTML = "Ce login est déjà pris";
                }
                else {
                    document.querySelector('.container').innerHTML = "Inscription réussie";
                }
            });

            requete.open("POST", "php/nouveau_membre.php"); // récup info et envoie à php
            requete.send(formInscription);
        }
        
    }
    
   
    document.getElementById("inscription").addEventListener("click",nouveauMembre);
        
});

