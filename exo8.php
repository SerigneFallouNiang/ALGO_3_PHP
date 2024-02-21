<?php
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
