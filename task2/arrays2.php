<?php

$numbers = [20, 30, 25, 35, -16, 60, -100];

$sum = 0;

foreach ($numbers as $number) {
    $sum += $number;
}

$average = round($sum / count($numbers), 2);

echo $average;