<?php
    define('BANK_RATE', 2.05);

    echo BANK_RATE . " et "; // 2.05

    $amount = 10000;
    $result = $amount * BANK_RATE / 100;
    echo $result; // 205
?>