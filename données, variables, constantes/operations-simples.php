<?php
    // Additions et soustractions :
    $expenses = 23995 + 4550;
    $revenues = 76110 + 1089;

    $bankBalance = $revenues - $expenses;

    echo "$bankBalance\n";

    // Multiplications et divisions :

    $totalNumberShares  = 1525;
    $myShares = 609.57;

    echo $myShares * 100 / $totalNumberShares . "\n";

    // Concaténer une chaîne de caractères

    $hello = 'Bienvenue sur notre site';
    $userName = 'John';

    $message = $hello . ' : ' . $userName; // Affiche "Bienvenue sur notre site : John"

    echo "$message \n";

    // Les différents opérateurs :
        
    $x = 10;
    $y = 15;

    $x += $y; // est similaire à $x = $x + $y

    echo "$x \n"; // Affiche 25 (x = 10 + 15)

    $hello = 'Bienvenue';
    $userName = 'John';

    $hello .= ' : ' . $userName;

    echo $hello; // Bienvenue : John ($hello . ' : ' . $userName)
?>

