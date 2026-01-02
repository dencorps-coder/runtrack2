<?php
// Job 05 : Créer une fonction qui compte les occurrences d'un caractère

// Je crée une fonction nommée occurrences avec 2 paramètres
// $str = la chaîne de caractères dans laquelle chercher
// $char = le caractère à compter
function occurrences($str, $char) {
    // Je crée un compteur qui commence à 0
    $compteur = 0;
    
    // Je parcours la chaîne caractère par caractère
    for ($i = 0; $i < strlen($str); $i++) {
        // Je vérifie si le caractère à la position $i est égal à $char
        if ($str[$i] == $char) {
            // Si c'est égal, j'augmente le compteur de 1
            $compteur = $compteur + 1;
        }
    }
    
    // Je retourne le nombre d'occurrences trouvées
    return $compteur;
}

// J'appelle la fonction avec l'exemple donné
$resultat = occurrences("Bonjour", "o");
echo $resultat;  // Affiche 2 car il y a 2 "o" dans "Bonjour"
?>

