<?php
// Job 01 : Vérifier si les nombres dans un tableau sont pairs ou impairs

// Je crée un tableau avec les nombres demandés
$tableau = array(200, 204, 173, 98, 171, 404, 459);

// Je parcours le tableau avec une boucle for
// Je commence à 0 car le premier indice d'un tableau est 0
for ($i = 0; $i < count($tableau); $i++) {
    // Je récupère le nombre à l'indice $i
    $nombre = $tableau[$i];
    
    // Je vérifie si le nombre est pair (le reste de la division par 2 est 0)
    if ($nombre % 2 == 0) {
        // Si c'est pair, j'affiche "X est paire"
        echo $nombre . " est paire<br />";
    } else {
        // Sinon, c'est impair, j'affiche "X est impaire"
        echo $nombre . " est impaire<br />";
    }
}
?>

