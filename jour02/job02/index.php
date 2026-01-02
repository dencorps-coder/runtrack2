<?php
// Job 02 : Afficher tous les nombres de 0 à 1337 SAUF 26, 37, 88, 1111 et 3233

// Je parcours tous les nombres de 0 à 1337
for ($i = 0; $i <= 1337; $i++) {
    // Je vérifie si le nombre n'est PAS dans la liste des nombres à exclure
    if ($i != 26 && $i != 37 && $i != 88 && $i != 1111 && $i != 3233) {
        // Si ce n'est pas un nombre à exclure, je l'affiche avec un retour à la ligne
        echo $i . "<br />";
    }
}
?>

