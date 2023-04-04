<?php

$compteur = 2;

while ($compteur <= 1000) {
    for ($compteur = 2; $compteur <= 1000; $compteur++) {
        if ($compteur % 2 === 0) {
            // calcul modulo : combien de fois le nombre 2 rentre-t-il dans le nombre représenté par $compteur
            echo $compteur. ' est pair <br>';
        } else {
            echo $compteur. ' est impair <br>';
        }
    }
}

echo 'Terminé !';

?>
