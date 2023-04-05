

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Liste des ventes annuelles</h1>
    <ul>
        <?php

        $sales = [
        'janvier' => 64,
        'fevrier' => 45,
        'mars' => 32,
        'avril' => 45,
        'mai' => 35,
        'juin' => 47,
        'juillet' => 68,
        'aout' => 76,
        'septembre' => 43,
        'octobre' => 23,
        'novembre' => 83,
        'decembre' => 15,
        ];

        $total = 0;
        $oldSale = 0;

        foreach ($sales as $month => $sale) {
            echo '<li>' . $month . ' : ' .$sale;
            if ($sale > $oldSale) {
                echo '+';
            } else {
                echo '-';
            }
            echo '</li>';
            $total += $sale;
            $oldSale = $sale;
        }
        ?>
    </ul>
    <?php
        echo 'Total : ' . $total;
    ?>
  
</body>
</html>
