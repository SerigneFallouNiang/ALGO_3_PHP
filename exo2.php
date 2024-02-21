<?php

echo "quelle  est la taille de votre taleau";
$t = intval(readline());
$tableau=[];

for($i= 0;$i<$t;$i++){

echo "entrer l'element $i :";

$element =readline();
$tableau[] =$element;

}
function supprimerDoublons($tableau){
return array_unique($tableau);
}
$resultat = supprimerDoublons($tableau);
print_r($resultat);
?>
