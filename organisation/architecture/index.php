<?php
    require 'back/user.php';
    require 'languages/languages.php';

    $user = getUser();
    loadLanguage($user['language']);
    $name = $user['name'];
    $sports = getUserSports($user);

    include 'front/template.php';

?>

