<?php

function factorial($n): int {
    $result = 1;

    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }

    return $result;
}

echo factorial(4);