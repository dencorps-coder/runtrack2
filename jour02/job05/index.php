<?php
// Job 05 : Afficher tous les nombres premiers jusqu'à 1000
// Un nombre premier est divisible uniquement par 1 et par lui-même

// Je parcours tous les nombres de 2 à 1000 (1 n'est pas premier)
for ($i = 2; $i <= 1000; $i++) {
    // Je suppose que le nombre est premier
    $estPremier = true;
    
    // Je teste tous les nombres de 2 jusqu'au nombre moins 1
    // Si je trouve un diviseur, le nombre n'est pas premier
    for ($j = 2; $j < $i; $j++) {
        // Si le reste de la division est 0, c'est un diviseur
        if ($i % $j == 0) {
            $estPremier = false;
            break; // Je sors de la boucle car j'ai trouvé un diviseur
        }
    }
    
    // Si le nombre est premier, je l'affiche
    if ($estPremier) {
        echo $i . "<br />";
    }
}
?>

