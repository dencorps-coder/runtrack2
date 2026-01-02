// Job 03 : Compteur qui s'incrémente à chaque clic sur le bouton

// Fonction pour ajouter 1 au compteur
function addone() {
    // Je récupère l'élément qui affiche le compteur
    const compteurElement = document.getElementById("compteur");
    
    // Je récupère la valeur actuelle (c'est du texte, donc je le convertis en nombre)
    const valeurActuelle = parseInt(compteurElement.textContent);
    
    // J'ajoute 1 à la valeur
    const nouvelleValeur = valeurActuelle + 1;
    
    // Je mets à jour l'affichage du compteur
    compteurElement.textContent = nouvelleValeur;
}

// Je récupère le bouton avec l'id "button"
const bouton = document.getElementById("button");

// Quand on clique sur le bouton, j'appelle la fonction addone
bouton.addEventListener("click", addone);

