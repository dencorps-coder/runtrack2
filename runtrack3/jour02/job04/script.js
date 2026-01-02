// Job 04 : Keylogger qui enregistre les lettres tapées

// Je récupère le textarea
const textarea = document.getElementById("keylogger");

// Je crée un écouteur d'événement sur toute la page (document) pour les touches du clavier
// Quand une touche est pressée, la fonction anonyme est exécutée
document.addEventListener("keydown", function(event) {
    // Je récupère la touche appuyée
    const touche = event.key;
    
    // Je vérifie si c'est une lettre (a à z)
    // Je convertis en minuscule pour être sûr
    const lettreMinuscule = touche.toLowerCase();
    
    // Je vérifie si c'est bien une lettre entre a et z
    if (lettreMinuscule >= "a" && lettreMinuscule <= "z") {
        // Je récupère le contenu actuel du textarea
        const contenuActuel = textarea.value;
        
        // Si le focus est dans le textarea, j'ajoute la lettre deux fois
        if (document.activeElement === textarea) {
            // J'empêche le comportement par défaut pour gérer l'ajout moi-même
            event.preventDefault();
            textarea.value = contenuActuel + lettreMinuscule + lettreMinuscule;
        }
        // Sinon, j'ajoute la lettre une seule fois
        else {
            textarea.value = contenuActuel + lettreMinuscule;
        }
    }
});

