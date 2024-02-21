<?php


echo "Entrez la taille de votre tableau : ";
$n = intval(readline());

for ($i = 1; $i <= $n; $i++) {
    echo "Entrez l'élément " . $i . " du tableau : ";
    $tab[$i] = readline();
}

for ($i = 1; $i <= $n; $i++) {
    $Somme .= $tab[$i];
}

echo "La concaténation des éléments du tableau est : " . $Somme . "\n";
?>
