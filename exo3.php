<?php
function rotationDroite($tableau, $positions) {
    $n = count($tableau);
    $tableauRotated = array();
    $start = $n - ($positions % $n);
    for ($i = 0; $i < $n; $i++) {
        $tableauRotated[($i + $start) % $n] = $tableau[$i];
    }
    return $tableauRotated;
}
echo "Entrez la taille du tableau : ";
$n = intval(readline());

$tableau = array();
for ($i = 0; $i < $n; $i++) {
    echo "Entrez l'élément ", $i + 1, " : ";
    $tableau[$i] = intval(readline());
}
echo "Entrez le nombre de positions de rotation à droite : ";
$positions = intval(readline());
$tableauRotated = rotationDroite($tableau, $positions);
echo "Le tableau après rotation à droite est : " . implode(", ", $tableauRotated);
?>
