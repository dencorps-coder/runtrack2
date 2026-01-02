<?php
// Job 04 : FizzBuzz
// Afficher les nombres de 1 à 100
// Si multiple de 3 : afficher "Fizz"
// Si multiple de 5 : afficher "Buzz"
// Si multiple de 3 ET de 5 : afficher "FizzBuzz"

// Je parcours tous les nombres de 1 à 100
for ($i = 1; $i <= 100; $i++) {
    // Je vérifie d'abord si c'est un multiple de 3 ET de 5 (donc de 15)
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br />";
    }
    // Sinon si c'est un multiple de 3
    else if ($i % 3 == 0) {
        echo "Fizz<br />";
    }
    // Sinon si c'est un multiple de 5
    else if ($i % 5 == 0) {
        echo "Buzz<br />";
    }
    // Sinon j'affiche le nombre normalement
    else {
        echo $i . "<br />";
    }
}
?>

