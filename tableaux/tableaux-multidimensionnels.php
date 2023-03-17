<?php
# LES TABLEAUX MULTIDIMENSIONNELS
# Déclarer un tableau multidimensionnel :
$users = [
    ['lastName' => 'Martin', 'firstName' => 'Jean'],
    ['lastName' => 'Doe', 'firstName' => 'Jane'],
    ['lastName' => 'Dupont', 'firstName' => 'Marc'],
];

# Insérer des données :
$users[] = ['lastName' => 'Durant', 'firstName' => 'Clara'];

# Lire des données :
var_dump($users); # affiche toutes les données du tableau $users
var_dump($users[0]); # affiche les données du 'tableau[0]' au sein du tableau $users
echo $users[0]['lastName']; # affiche Martin

# Modifier des données :
$users[0] = ['lastName' => 'Durand', 'firstName' => 'Elyse']; # modifier toutes les données de la ligne 0
$users[1]['firstName'] = 'Jeanne'; # modifier une valeur dans un des tableaux

# Exercice:
$teams = [
    [
        'name' => 'Golden Guardians',
        'members' => [
            ['firstName' => 'Kevin', 'lastName' => 'Yarnell'],
            ['firstName' => 'Can', 'lastName' => 'Çelik'],
            ['firstName' => 'Greyson', 'lastName' => 'Gilmer'],
            ['firstName' => 'Victor', 'lastName' => 'Huang'],
            ['firstName' => 'Choi', 'lastName' => 'Jae-hyun'],
            ['firstName' => 'Yuri', 'lastName' => 'Jew'],
        ]
    ],
    [
        'name' => 'Immortals',
        'members' => [
            ['firstName' => 'Paul', 'lastName' => 'Boyer'],
            ['firstName' => 'Jake', 'lastName' => 'Puchero'],
            ['firstName' => 'Jérémy', 'lastName' => 'Valdenaire'],
            ['firstName' => 'Johnny', 'lastName' => 'Ru'],
            ['firstName' => 'Nickolas', 'lastName' => 'Surgent'],
        ]
    ],
];

# afficher le nom de la première équipe :
var_dump($teams[0]['name']);
# ou
echo $teams[0]['name'];

# Affichez le prénom de M. Boyer:
echo $teams[1]['members'][0]['firstName'];

#  Rajoutez donc pour chaque équipe une clef "coach" qui pourra recevoir
# le nom et le prénom du coach, sachant que
# le coach des Golden Guardians est Nick Smith et que celui des Immortals est Thomas Si-Hassen.
$teams[0]['Coach'] = ['firstName' => 'Nick', 'lastName' => 'Smith'];
$teams[1]['Coach'] = ['firstName' => 'Thomas', 'lastName' => 'Si-Hassen'];
echo $teams;
?>
