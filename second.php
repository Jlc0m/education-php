<?php

const MINUTS_IN_HOUR = 60;
const SECOND_IN_MINUT = 60;
const MILISECOND_IN_SECOND = 1000;

$h = 1;
$m = 4;
$s = 0;

function to_miliseconds (int $h, int $m, int $s): int 
{
    $hours = $h * MINUTS_IN_HOUR * SECOND_IN_MINUT * MILISECOND_IN_SECOND;
    $minuts = $m * SECOND_IN_MINUT * MILISECOND_IN_SECOND;
    $seconds = $s * MILISECOND_IN_SECOND;

    return $hours+$minuts+$seconds;
}

echo to_miliseconds($h, $m, $s);

?>