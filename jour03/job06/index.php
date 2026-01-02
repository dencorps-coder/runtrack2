<?php
// Job 06 : Écrire une chaîne à l'envers

// Je crée une variable de type string avec le texte demandé
$str = "Les choses que l'on possède finissent par nous posséder.";

// Je parcours la chaîne à l'envers
// Je commence à la fin (strlen($str) - 1) et je vais jusqu'au début (0)
for ($i = strlen($str) - 1; $i >= 0; $i--) {
    // J'affiche le caractère à la position $i
    echo $str[$i];
}
?>

