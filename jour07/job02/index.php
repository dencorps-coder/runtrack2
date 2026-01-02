<?php
// Job 02 : Créer une fonction avec un paramètre booléen

// Je crée une fonction nommée bonjour avec un paramètre $jour
// Le paramètre est placé entre les parenthèses
function bonjour($jour) {
    // Je vérifie si le paramètre $jour vaut true (vrai)
    if ($jour == true) {
        // Si c'est true, j'affiche "Bonjour"
        echo "Bonjour";
    } else {
        // Sinon (donc si c'est false), j'affiche "Bonsoir"
        echo "Bonsoir";
    }
}

// J'appelle la fonction avec true
bonjour(true);
echo "<br />";

// J'appelle la fonction avec false
bonjour(false);
?>

