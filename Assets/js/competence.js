function filterCompetences(category) {
    // Masquer toutes les catégories
    const categories = document.querySelectorAll('.competence-category');
    categories.forEach(function (categoryElement) {
        categoryElement.style.display = 'none';
    });

    // Afficher la catégorie sélectionnée
    const selectedCategory = document.getElementById(category);
    if (selectedCategory) {
        selectedCategory.style.display = 'block';
    }
}

// Afficher les compétences techniques par défaut au chargement de la page
document.addEventListener("DOMContentLoaded", function() {
    filterCompetences('techniques');
});