<?php

function increment($number): void
{
    echo $number.PHP_EOL;
    if ($number < 20) {
        $number += 2;
        increment($number);
    }
}

increment(15);
?>
