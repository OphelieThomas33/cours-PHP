<?php

function loadLanguage($language)
{
    if ($language == 'fr') {
        include 'language_fr.php';
    } else {
        include 'language_en.php';
    }
}

?>
