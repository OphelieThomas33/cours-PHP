<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice défi - Recettes</title>
</head>
<body>
    <?php
    
    foreach (getRecipes() as $recipe) {

    $title = $recipe['title'];
    $time = $recipe['time'];
    $difficulty = $recipe['difficulty'];

    include 'front/recipe.php';
    
    }

    ?>
</body>
</html>
