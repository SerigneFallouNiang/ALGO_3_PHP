<?php
// Exercice 8  : 
// Écrire une fonction qui calcule la médiane d'un tableau d'entiers.

echo "Quelle est la taille de ton tableau : ";
$t = intval(readline());

$somme = 0; 

for ($i = 0; $i < $t; $i++) {
    echo "Element $i :  ";
    $element = readline();
        $somme += $element; 
}
echo "La mediane de  votre tableau est : ".$somme/2;
?>
