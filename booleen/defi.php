<html>
<head></head>
<body>
<h1>Messagerie</h1>
<?php
$isPremium = true;
$unreadMessages = 80;
$readMessages = 30;
$junkMessages = 3;
$spamMessages = 10;
$messagesCountLimit = 50;
$premiumCountLimit = 100;


$hasUnreadMessages = true;
$mustCleanMessages = $junkMessages > 0 || $spamMessages > 0; // $junkMessages + $spamMessages > 0
$totalMessages = $unreadMessages + $readMessages + $junkMessages + $spamMessages;
$isMessageboxFull = (!$isPremium && $totalMessages > $messagesCountLimit) || ($isPremium && $totalMessages > $premiumCountLimit);

if ($hasUnreadMessages) {
  echo 'Vous avez messages ' . $unreadMessages . ' non lus<br>';
}
  
if ($mustCleanMessages) {
    echo 'Vous avez des messages à nettoyer<br>';
}
  
if ($isMessageboxFull) {
    echo 'Attention : vous avez dépassé la limite de messages autorisée !<br>';
}
?>
</body>
</html>