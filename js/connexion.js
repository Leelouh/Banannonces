document.addEventListener('DOMContentLoaded', function () { // après chargement

    
    function connexionSite() {
        //alert("BOUYAAAAG");
        var coData = document.getElementById("signin");
        var coFormData = new FormData(coData);
        var requete = new XMLHttpRequest();
        
       
        console.log("CONNEXIOOOOON");
        
        
        requete.open("POST", "php/connexion.php"); // récup info et envoie à php
        requete.send(coFormData);
    }
    
   
    document.getElementById("connexionBTN").addEventListener("click",connexionSite);
    
    
});

