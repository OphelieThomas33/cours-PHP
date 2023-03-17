<?php
# LES TABLEAUX INDEXÉS
# déclarer un tableau :
$myArray = []; # déclarer un tableau vide
$numbers = [5, 20, 16, 2, 99];
$animals = ['Lion', 'Chat', 'Chien', 'Cheval', 'Tigre', 'Ours'];

# Insérer une donnée
$animals[] = 'Tortue';

# Lire une donnée
echo $animals[0]; # affiche 'Lion'

# Modifier une donnée
$myArray[] = 'Voiture';
$myArray[] = 'Camion';
$myArray[0] = 'Moto' ;  # remplace 'Voiture' par 'Moto'

$myArray[5] = 'Bateau';
$myArray[] = 'Vélo'; # Vélo prendra l'index 6 même si le tableau ne comprend pas autant de valeurs
echo $myArray[6]; # affiche vélo

# Exercices : 

$names = ['Lisa', 'Mathieu', 'Laure', 'Simon'];
echo 'Bonjour ' . $names[2];
$names[] = 'Henriette';
echo $names[4];
?>
