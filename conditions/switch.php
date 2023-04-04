<?php

// $boxeType = 'savate BF';
// // Doit afficher "Pieds et poings"

// $boxeType = 'boxe khmère';
// // Doit afficher "Tout le haut du corps"

$boxeType = 'kick-boxing américain';
// Doit afficher "Pieds et poings"

// $boxeType = 'MMA';
// // Doit afficher "Tout le haut du corps", car MMA n'est pas dans la liste

// $boxeType = 'kick-boxing japonais';
// // Doit afficher "Poings, pieds et genoux"


switch ($boxeType) {
    case "savate BF":
    case "kick-boxing américain":
        echo "Pieds et poings";
        break;
    case "boxe khmère":
        echo "Tout le haut du corps";
        break;
    case "kick-boxing japonais":
        echo "Pieds, poings et genoux";
        break;
    default:
        echo "Tout le haut du corps";
}
?>