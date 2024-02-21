<?php
// Exercice 10 : 
// Développer un programme pour déterminer si un patient est atteint de la COVID-19 implique généralement la vérification de certains symptômes ou facteurs de risque. 

echo "Répondez aux questions par oui/non\n";

function poserQuestion($question) {
    echo $question . " ";
    $reponse = strtolower(trim(readline())); 
    return $reponse;
}

$reponse1 = poserQuestion("Avez-vous noté une perte ou une forte diminution de votre goût ou de votre odorat ces derniers jours ?");
$reponse2 = poserQuestion("Avez-vous un mal de gorge ou des douleurs musculaires ou des courbatures inhabituelles ou des maux de tête inhabituels ces derniers jours ?");
if ($reponse2 == "oui") {
    echo "Si vous avez des maux de tête qui ne disparaissent pas après la prise de médicaments anti-douleurs (dont paracétamol) et que vous décririez comme intolérables : Appelez le 15.\n";
}
$reponse3 = poserQuestion("Avez-vous de la diarrhée ces dernières 24 heures (au moins 3 selles molles) ?");
$reponse4 = poserQuestion("Avez-vous une fatigue inhabituelle ces derniers jours ?");
if ($reponse4 == "oui") {
    $reponse5 = poserQuestion("Cette fatigue vous oblige-t-elle à vous reposer plus de la moitié de la journée ?");
}
$reponse6 = poserQuestion("Êtes-vous dans l'impossibilité de vous alimenter ou de boire DEPUIS 24 HEURES OU PLUS ?");
$reponse7 = poserQuestion("Dans les dernières 24 heures, avez-vous noté un manque de souffle INHABITUEL lorsque vous parlez ou faites un petit effort ?");
if ($reponse7 == "oui") {
    echo "Facteur de gravité majeur\n";
}

echo "Quel est votre âge ?\n";
echo "1: < 15 ans\n2: >= 15 et < 50 ans\n3: >= 50 et < 65 ans\n4: >= 65 ans\n";
$age = intval(readline());

echo "Quel est votre poids ? Quelle est votre taille ?\n";
echo "1: Indice de masse corporelle (IMC) < 30 kg/m²\n2: Indice de masse corporelle (IMC) >= 30 kg/m²\n";
$imc = intval(readline());

$reponse8 = poserQuestion("Avez-vous des antécédents de maladie cardiovasculaire : hypertension artérielle compliquée (avec complications cardiaques, rénales), accident vasculaire cérébral, maladie coronaire (infarctus), chirurgie cardiaque, insuffisance cardiaque avec essou");
$reponse9 = poserQuestion("Avez-vous un diabète mal équilibré ou avec des complications (yeux, reins) ? ");
$reponse10 = poserQuestion("Avez-vous un cancer évolutif sous traitement (hors hormonothérapie) ? ");
$reponse11 = poserQuestion("Avez-vous une maladie respiratoire chronique (bronchopneumopathie obstructive, asthme sévère, fibrose pulmonaire, syndrome d’apnées du sommeil, mucoviscidose) ou êtes-vous suivi par un pneumologue ? ");
$reponse12 = poserQuestion("Avez-vous une insuffisance rénale chronique avec besoin de faire de la dialyse ? ");
$reponse13 = poserQuestion("Avez-vous une cirrhose ? ");
$reponse14 = poserQuestion("Êtes-vous enceinte au 3ème trimestre de votre grossesse ? ");
$reponse15 = poserQuestion("Avez-vous une drépanocytose homozygote (forme majeure) ou avez-vous bénéficié d’une splénectomie (ablation de la rate) à cause de la drépanocytose ? ");
$reponse16 = poserQuestion("Avez-vous une immunodépression, par exemple : médicamenteuse (chimiothérapie anti cancéreuse, traitement immunosuppresseur) ? ");


?>
