// Job 01 : Récupérer le contenu d'un élément et l'afficher dans la console

// Fonction qui récupère la citation et l'affiche dans la console
function citation() {
    // Je récupère l'élément avec l'id "citation"
    const elementCitation = document.getElementById("citation");
    
    // Je récupère le texte contenu dans cet élément
    const texteCitation = elementCitation.textContent;
    
    // J'affiche le texte dans la console
    console.log(texteCitation);
}

// Je récupère le bouton avec l'id "button"
const bouton = document.getElementById("button");

// Quand on clique sur le bouton, j'appelle la fonction citation
bouton.addEventListener("click", citation);

