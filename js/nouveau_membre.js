document.addEventListener('DOMContentLoaded', function () { // après chargement

    
    function nouveauMembre() {
        
        if (document.getElementById("passwordIns").value != document.getElementById("passwordIns2").value){
            document.querySelector('#checkMDP').innerHTML = "Les mots de passe ne correspondent pas";
        }
        
        else {
            //alert("BOUYAAAAG");
        var inscriptionData = document.getElementById("newMember");
        var formInscription = new FormData(inscriptionData);
        var requete = new XMLHttpRequest();
        
        
        
        requete.open("POST", "php/nouveau_membre.php"); // récup info et envoie à php
        requete.send(formInscription);
        location.reload();
        }
        
        
    }
    
   
    document.getElementById("inscription").addEventListener("click",nouveauMembre);
    
    
});

