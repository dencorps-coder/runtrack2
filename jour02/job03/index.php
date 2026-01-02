<?php
// Job 03 : Afficher les nombres de 0 à 100 avec des conditions spéciales
// Si le nombre est entre 0 et 20 : en italique
// Si le nombre est entre 25 et 50 : souligné
// Afficher "La Plateforme_" à la place de 42

// Je parcours tous les nombres de 0 à 100
for ($i = 0; $i <= 100; $i++) {
    // Si c'est le nombre 42, je remplace par "La Plateforme_"
    if ($i == 42) {
        echo "La Plateforme_<br />";
    }
    // Sinon si le nombre est entre 0 et 20, je l'affiche en italique
    else if ($i >= 0 && $i <= 20) {
        echo "<i>" . $i . "</i><br />";
    }
    // Sinon si le nombre est entre 25 et 50, je le souligne
    else if ($i >= 25 && $i <= 50) {
        echo "<u>" . $i . "</u><br />";
    }
    // Sinon je l'affiche normalement
    else {
        echo $i . "<br />";
    }
}
?>

