<?php
// Exercice 9 : 
// Écrire un programme qui calcule la fréquence de chaque caractère dans une     chaîne de caractères.

echo "Entrez une chaîne de caractères : ";
$chaine = readline();
$frequence = array();
for ($i = 0; $i < strlen($chaine); $i++) {
    $caractere = $chaine[$i];
    if (!isset($frequence[$caractere])) {
        $frequence[$caractere] = 0;
    }
    $frequence[$caractere]++;
}
foreach ($frequence as $caractere => $nombre) {
    echo "Le caractère '" . $caractere . "' apparaît " . $nombre . " fois dans la chaîne.\n";
}
?>
