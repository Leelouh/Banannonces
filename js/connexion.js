document.addEventListener('DOMContentLoaded', function () { // après chargement

    
    function connexionSite() {
        var coData = document.getElementById("signin");
        var coFormData = new FormData(coData);
        var requete = new XMLHttpRequest();
        
        requete.addEventListener('load', function(data){
            var ret = JSON.parse(data.target.responseText);
            if (ret==false){
                alert("Mauvais identifiant ou mot de passe");
            }
        });
        
        
        requete.open("POST", "php/connexion.php"); // récup info et envoie à php
        requete.send(coFormData);
    }
    
   
    document.getElementById("connexionBTN").addEventListener("click",connexionSite);
    
    
});

