<?php

$lineElementCounter = 0;

for ($i = 1; $i <= 110; $i++) {
    $outputElement = '';
    $lineElementCounter++;

    if ($i % 3 === 0) $outputElement .= 'Coza';
    if ($i % 5 === 0) $outputElement .= 'Loza';
    if ($i % 7 === 0) $outputElement .= 'Woza';

    if ($outputElement === '') {
        $outputElement = $i;
    }

    if ($lineElementCounter === 11) {
        $lineElementCounter = 0;
        echo $outputElement . PHP_EOL;
    } else echo "$outputElement ";
}