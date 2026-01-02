<?php
// Job 02 : Afficher un caractère sur deux d'une chaîne

// Je crée une variable de type string avec le texte demandé
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// Je parcours la chaîne avec une boucle for
// Je commence à 0 et je vais de 2 en 2 (pour prendre un caractère sur deux)
for ($i = 0; $i < strlen($str); $i = $i + 2) {
    // J'affiche le caractère à la position $i
    echo $str[$i];
}
?>

