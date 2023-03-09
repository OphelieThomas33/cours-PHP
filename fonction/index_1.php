<?php
$var1 = 'foo';
$var2 = [];
$var3 = 0;

echo 'var 1 : ';
var_dump(empty($var1)) . PHP_EOL;
echo 'var 2 : ';
var_dump(empty($var2)) . PHP_EOL;
echo 'var 3 : ';
var_dump(empty($var3)) . PHP_EOL;
?>

<?php

$languages = ['PHP', 'HTML', 'JavaScript', 'C++', 'Python'];

// Début du code à remplacer

// $listOfLanguages = '';
// // Pour chacun des éléments du tableau
// foreach ($languages as $language) {
//     // On concatène le langage à la chaîne de caractères
//     $listOfLanguages .= $language . ', ';
// }

// Fin du code à remplacer
$languagesString = implode(',', $languages);
echo $languagesString;

// Affichera : PHP,HTML,JavaScript,C++,Python,
// echo $listOfLanguages;
?>