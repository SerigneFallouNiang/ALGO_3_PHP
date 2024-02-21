<?php
// Exercice 5  : 
// Écrire un programme qui trouve les éléments communs à deux tableaux d'entiers.

echo "Quelle est la taille de votre tableau 1 : ";
$t1 = intval(readline());
$tableau1 = [];
for ($i = 0; $i < $t1; $i++) {
    echo "Entrer l'élément $i : ";
    $element1 = readline();
    $tableau1[] = $element1;
}
echo "Quelle est la taille de votre tableau 2 : ";
$t2 = intval(readline());
$tableau2 = [];
for ($i = 0; $i < $t2; $i++) {
    echo "Entrer l'élément $i : ";
    $element2 = readline();
    $tableau2[] = $element2;
}
foreach ($tableau1 as $element1) {
    foreach ($tableau2 as $element2) {
        if ($element1 == $element2) {
            echo " les resemblances se porte sur :  $element1\n";
        }
    }
}
?>

