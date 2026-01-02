// Job 02 : Afficher ou masquer un article au clic

// Fonction pour afficher ou masquer l'article
function showhide() {
    // Je cherche si l'article existe déjà dans la page
    var article = document.getElementById("citation");
    
    // Si l'article n'existe pas, je le crée et je l'ajoute
    if (article == null) {
        // Je crée un nouvel élément article
        var nouvelArticle = document.createElement("article");
        
        // Je lui donne l'id "citation"
        nouvelArticle.id = "citation";
        
        // Je mets le texte dedans
        nouvelArticle.textContent = "L'important n'est pas la chute, mais l'atterrissage.";
        
        // J'ajoute l'article dans le body de la page
        document.body.appendChild(nouvelArticle);
    }
    // Si l'article existe déjà, je le supprime
    else {
        article.remove();
    }
}

// Je récupère le bouton avec l'id "button"
var bouton = document.getElementById("button");

// Quand on clique sur le bouton, j'appelle la fonction showhide
bouton.addEventListener("click", showhide);

