 // Fonction pour afficher ou masquer le tableau
 
 function toggleTable() {
    var table = document.getElementById("EtudiantTable");
    // Si le tableau est caché, on l'affiche, sinon on le cache
    if (table.style.display === "none") {
        table.style.display = "block";
    } else {
        table.style.display = "none";
    }
}
    

