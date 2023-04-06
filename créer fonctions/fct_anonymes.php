<?php

$numberToAdd = 7;
$addNumber = function ($n) use ($numberToAdd)
{
    return ($n + $numberToAdd);
};

$array = range(1, 27, 3);
print_r(array_map($addNumber, $array))

?>
