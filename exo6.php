<?php

echo "Entrez les éléments du tableau séparés par des virgules : ";
$donnees = readline();

$tableau = explode(',', $donnees);

echo "Les éléments sans doublons dans le tableau sont : " . implode(', ', array_unique($tableau));
?>