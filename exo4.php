
<?php
echo "Quelle est la taille de ton tableau : ";
$t = intval(readline());

$somme = 0; 

for ($i = 0; $i < $t; $i++) {
    echo "Entre une lettre : ";
    $element = readline();

if ($element == "a" || $element == "e" || $element == "y" || $element == "u" || $element == "i" || $element == "o") {
        $somme += 1; 
    }
}

echo "Le nombre de voyelles dans votre tableau est : $somme\n";
?>
