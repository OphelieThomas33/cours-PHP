<?php

function loadRecipes(): array
{
  return json_decode(base64_decode('WyJHYXRlYXUgYXUgY2hvY29sYXQiLDQwLDEsIkZsYW4gcGF0aXNzaWVyIiw2MCwyXQ'), true);
}

function getRecipes(): array
{
    $recipes = loadRecipes();
    $recipesCount = count($recipes);
    $recipesList = [];

    for ($i = 0; $i < $recipesCount; $i +=3) {
        $recipesList[] = [
            'title' => $recipes[$i],
            'time' => $recipes[$i+1],
            'difficulty' => $recipes[$i+2]
        ];
    }
    return $recipesList;
}

?>
