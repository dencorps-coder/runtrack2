<?php
// Job 06 : Afficher un rectangle de 20 de largeur par 10 de hauteur
// Les dimensions sont dans des variables pour être facilement modifiables

// Je définis les dimensions du rectangle
$largeur = 20;
$hauteur = 10;

// Je parcours les lignes (hauteur)
for ($i = 0; $i < $hauteur; $i++) {
    // Pour chaque ligne, je parcours les colonnes (largeur)
    for ($j = 0; $j < $largeur; $j++) {
        // J'affiche un caractère pour former le rectangle
        echo "*";
    }
    // À la fin de chaque ligne, je fais un retour à la ligne
    echo "<br />";
}
?>

