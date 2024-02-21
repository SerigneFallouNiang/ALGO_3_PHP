<?php
// Exercice 1  : 
// Écrire un programme qui calcule le produit de tous les éléments d'un tableau d'entiers.

$produit = 1;

echo "Quelle est la taille de votre tableau : ";
$t = readline();

echo "Entrez les éléments à multiplier :\n";
for ($i = 1; $i <= $t; $i++) {
    echo "Élément $i : ";
    $element[$i] = readline();
    $produit *= $element[$i];
}

echo "Le produit de tous vos éléments est : $produit\n";
?>
