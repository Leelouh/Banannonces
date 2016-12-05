document.addEventListener('DOMContentLoaded', function () { // après chargement


    function deconnexionSite() {
        var requete = new XMLHttpRequest();
        
       
        console.log("DECONNEXIOOOOON");
        
        
        requete.open("POST", "php/deconnexion.php"); // récup info et envoie à php
        requete.send();
        location.reload(); //recharge la page en js
    }

    document.getElementById("deconnexionBTN").addEventListener("click",deconnexionSite);
    
    
    
});

