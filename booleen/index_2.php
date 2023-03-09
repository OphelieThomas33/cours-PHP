<?php 
    $isGroupFull = true;
    $isPlaneAvailable = true;
    $isDestinationDangerous = false;

    // Cette variable décide du départ
    $canWeGo = !$isDestinationDangerous && $isPlaneAvailable && $isGroupFull;

    if ($canWeGo) {
    echo 'Départ imminent !';
}
?>

<?php 
    $isGroupFull = true;
    $isDestinationDangerous = true;

    // Cette variable décide du départ
    $canWeGo = ($isDestinationDangerous && $isGroupFull) || (!$isDestinationDangerous && !$isGroupFull);
    // peut aussi s'écrire : $canWeGo = $isGroupFull || !$isDestinationDangerous;

    if ($canWeGo) {
    echo 'Départ imminent !';
}
?>

<?php 
    $isGroupFull = true;
    $isPlaneAvailable = false;
    $isDestinationDangerous = true;

    // Cette variable décide du départ
    $canWeGo = $isDestinationDangerous && ($isGroupFull || $isPlaneAvailable);

    if ($canWeGo) {
    echo 'Départ imminent !';
}
?>
