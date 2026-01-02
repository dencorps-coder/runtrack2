<?php
// Job 04 : Créer une fonction qui fait des calculs

// Je crée une fonction nommée calcule avec 3 paramètres
// $a = premier nombre
// $operation = le type d'opération (+, -, *, /, %)
// $b = deuxième nombre
function calcule($a, $operation, $b) {
    // Je vérifie quelle opération faire selon le caractère dans $operation
    if ($operation == "+") {
        // Si c'est un plus, j'additionne
        return $a + $b;
    }
    else if ($operation == "-") {
        // Si c'est un moins, je soustrais
        return $a - $b;
    }
    else if ($operation == "*") {
        // Si c'est une étoile, je multiplie
        return $a * $b;
    }
    else if ($operation == "/") {
        // Si c'est un slash, je divise
        return $a / $b;
    }
    else if ($operation == "%") {
        // Si c'est un pourcentage, je fais le modulo (reste de la division)
        return $a % $b;
    }
}

// J'appelle la fonction avec différents exemples
echo calcule(10, "+", 5) . "<br />";  // Affiche 15
echo calcule(10, "-", 5) . "<br />";  // Affiche 5
echo calcule(10, "*", 5) . "<br />";  // Affiche 50
echo calcule(10, "/", 5) . "<br />";  // Affiche 2
echo calcule(10, "%", 5) . "<br />";  // Affiche 0
?>

