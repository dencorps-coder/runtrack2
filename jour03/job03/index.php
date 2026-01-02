<?php
// Job 03 : Afficher seulement les voyelles d'une chaîne

// Je crée une variable de type string avec le texte demandé
$str = "I'm sorry Dave I'm afraid I can't do that";

// Je crée un tableau avec toutes les voyelles (en minuscules et majuscules)
$voyelles = array('a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y');

// Je parcours la chaîne caractère par caractère
for ($i = 0; $i < strlen($str); $i++) {
    // Je récupère le caractère à la position $i
    $caractere = $str[$i];
    
    // Je vérifie si le caractère est une voyelle
    // Je cherche si le caractère est dans le tableau des voyelles
    $estVoyelle = false;
    for ($j = 0; $j < count($voyelles); $j++) {
        if ($caractere == $voyelles[$j]) {
            $estVoyelle = true;
            break; // Je sors de la boucle car j'ai trouvé
        }
    }
    
    // Si c'est une voyelle, je l'affiche
    if ($estVoyelle) {
        echo $caractere;
    }
}
?>

