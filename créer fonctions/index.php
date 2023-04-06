<?php

// Créer sa propre fonction :
function dateHeure()
{
    echo date("j/m/Y H:i"). PHP_EOL;
}
dateHeure();

// Les paramètres :
function greetings(string $name, int $age = null)
{
    echo "Bonjour, je m'appelle " . $name . PHP_EOL;
    if ($age) {
        echo "J'ai " . $age . ' ans.' . PHP_EOL;
    }
}

greetings('Ophélie', 35);

// les valeurs de retour :
function getDateTime(): string
{
    return date('d/m/Y H:i');
}
$currentDate = getDateTime();
echo $currentDate;

// La portée des variables :
function increaseToTwenty()
{
    static $start = 0;
    echo $start . PHP_EOL;
        
    if ($start < 20) {
        $start = $start +2;
        increaseToTwenty();
    }
}

increaseToTwenty();

// Variables globales :
global $city;

$city = 'Bordeaux';

print_r($GLOBALS);

?>
