<?php

function greetings(string $name, int $age, array $languages = null)
{
    echo 'Bonjour, je m\'appelle '.$name.' et j\'ai '.$age.' ans.';
    if (!$languages) {
        echo  "Je n'ai pas de langage de programmation favori";
    } else {
        echo "J'ai ". count($languages)." langages de programmation favoris, il s'agit de : ";
        foreach ($languages as $language) {
            echo $language.', ';
        }
        echo '.';
    }
}

greetings('Ophélie', 35, ['Python', 'CSS']);

?>

<?php

function greetingsTest(string $name, int $age, array $languages = null)
{
    echo(sprintf('Bonjour je m\'appelle %s et j\'ai %s ans.', $name, $age)).PHP_EOL;
    if (!$languages) {
        echo  "Je n'ai pas de langage de programmation favori.";
    } else {
        echo(sprintf('J\'ai %s langages favoris qui sont : %s.', count($languages), implode(', ', $languages))).PHP_EOL;
    }
    countGreetings();
}

greetingsTest('Ophélie', 35, ['Python', 'CSS', 'PHP']);

function countGreetings()
{
    static $compteur = 0;
    $compteur++;
    echo "La fonction a été exécutée ".$compteur. " fois.";
}

greetingsTest('Ophélie', 35, ['Python', 'CSS', 'PHP']);
greetingsTest('Ophélie', 35, ['Python', 'CSS', 'PHP']);
greetingsTest('Ophélie', 35, ['Python', 'CSS', 'PHP']);
greetingsTest('Ophélie', 35, ['Python', 'CSS', 'PHP']);
greetingsTest('Ophélie', 35, ['Python', 'CSS', 'PHP']);
greetingsTest('Ophélie', 35, ['Python', 'CSS', 'PHP']);

?>
