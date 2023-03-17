<?php
# LES TABLEAUX ASSOCIATIFS
# Déclarer un tableau associatif :
$user = [
    'lastName' => 'Martin',
    'firstName' => 'Jean',
    'age' => 36
];

# Insérer une donnée :
$user['email'] = 'jean.martin@email.com';

# Lire une donnée :
echo $user['lastName']; # Affiche Martin

# Modifier une donnée :
$user['age'] = 37;  # remplace l'âge 36 par 37

# Exercice :
$ron = [
    'name' => 'Ron Weasley',
    'knuts' => 10,
    'sickles' => 2,
    'galleons' => 0
];
$knuts = $ron['knuts'];
$knuts += $ron['sickles'] * 29;
$knuts += $ron['galleons'] * 17 * 29;
echo $ron['name'].' possède l\'équivalent de '.$knuts.' noises';

# La famille Weasley a gagné au loto, Ron se voit ainsi plus riche de 5 gallions
$ron['galleons'] = 5;
$knuts = $ron['knuts'];
$knuts += $ron['sickles'] * 29;
$knuts += $ron['galleons'] * 17 * 29;
echo $ron['name'].' possède l\'équivalent de '.$knuts.' noises';

# Afin d'empocher cet argent, il faut prouver que Ron soit majeur !
$ron['age'] = 19;
echo 'Ron est majeur car il a '.$ron['age'].' ans.';

# Suite à son dernier passage chez les moldus, c'est-à-dire les non-sorciers, il reste également à Ron 15 euros.
# Sachant qu'un euro vaut 61 noises, modifiez le code pour prendre en compte ses euros dans le tableau et le calcul.
$ron['euros'] = 15;
$knuts += $ron['euros'] * 61;
echo $ron['name'].' possède l\'équivalent de '.$knuts.' noises';

?>