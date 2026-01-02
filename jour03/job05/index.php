<?php
// Job 05 : Compter les voyelles et consonnes, afficher dans un tableau HTML

// Je crée une variable de type string avec le texte demandé
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";

// Je crée un tableau associatif (dictionnaire) avec les clés "consonnes" et "voyelles"
$dic = array(
    "consonnes" => 0,
    "voyelles" => 0
);

// Je crée un tableau avec toutes les voyelles
$voyelles = array('a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y');

// Je parcours la chaîne caractère par caractère
for ($i = 0; $i < strlen($str); $i++) {
    // Je récupère le caractère à la position $i
    $caractere = $str[$i];
    
    // Je vérifie si c'est une lettre (pas un espace, apostrophe, etc.)
    // Je vérifie si c'est une voyelle
    $estVoyelle = false;
    for ($j = 0; $j < count($voyelles); $j++) {
        if ($caractere == $voyelles[$j]) {
            $estVoyelle = true;
            break;
        }
    }
    
    // Si c'est une voyelle, j'incrémente le compteur de voyelles
    if ($estVoyelle) {
        $dic["voyelles"] = $dic["voyelles"] + 1;
    }
    // Sinon, si c'est une lettre (consonne), j'incrémente le compteur de consonnes
    else if (($caractere >= 'a' && $caractere <= 'z') || ($caractere >= 'A' && $caractere <= 'Z')) {
        $dic["consonnes"] = $dic["consonnes"] + 1;
    }
}

// J'affiche le résultat dans un tableau HTML
echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>Voyelles</th>";
echo "<th>Consonnes</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
echo "<tr>";
echo "<td>" . $dic["voyelles"] . "</td>";
echo "<td>" . $dic["consonnes"] . "</td>";
echo "</tr>";
echo "</tbody>";
echo "</table>";
?>

