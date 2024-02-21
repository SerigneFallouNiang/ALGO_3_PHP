<?php
// Exercice 6  : 
// Écrire une fonction qui retourne tous les éléments qui n'ont pas de doublons dans un tableau.

echo "Entrez les éléments du tableau séparés par des virgules : ";
$donnees = readline();

$tableau = explode(',', $donnees);

echo "Les éléments sans doublons dans le tableau sont : " . implode(', ', array_unique($tableau));
?>