<?php

$type = 'trike'; // À changer à chaque réparation

// Affectation du nombre de pneus à la variable $nbPneus
switch ($type) {
    case "voiture":
    case "quad":
        $nbPneus = 4;
        break;
    case "scooter":
    case "moto":
        $nbPneus = 2;
        break;
    case "trike":
        $nbPneus = 3;
        break;
    default:
        $nbPneus = 1;
}

// Calcul des deux prix $pneufPrice et $rouesCoolPrice
if ($nbPneus < 4) {
    $pneufPrice = 60 * $nbPneus;
} else {
    $pneufPrice = (60*0.85) * $nbPneus;
}

if ($nbPneus < 3) {
    $rouesCoolPrice = 75 * $nbPneus;
} else {
    $rouesCoolPrice = (75*0.75) * $nbPneus;
}

// Affichage du nom du fournisseur le plus intéressant
if ($pneufPrice < $rouesCoolPrice) {
    echo "Prix le plus bas chez : Pneufs";
} else {
    echo "Prix le plus bas chez : Roues Cool";
}

?>