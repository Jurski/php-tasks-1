<?php

$input = strtoupper(readline("enter string to convert to keypad numbers: "));

$outputDigits = '';

for ($i = 0; $i < strlen($input); $i++) {
    $char = $input[$i];

    switch ($char) {
        case 'A':
        case 'B':
        case 'C':
            $outputDigits .= '2';
            break;
        case 'D':
        case 'E':
        case 'F':
            $outputDigits .= '3';
            break;
        case 'G':
        case 'H':
        case 'I':
            $outputDigits .= '4';
            break;
        case 'J':
        case 'K':
        case 'L':
            $outputDigits .= '5';
            break;
        case 'M':
        case 'N':
        case 'O':
            $outputDigits .= '6';
            break;
        case 'P':
        case 'Q':
        case 'R':
        case 'S':
            $outputDigits .= '7';
            break;
        case 'T':
        case 'U':
        case 'V':
            $outputDigits .= '8';
            break;
        case 'W':
        case 'X':
        case 'Y':
        case 'Z':
            $outputDigits .= '9';
            break;
        default:
            $outputDigits .= '?';
    }
}

echo "Keypad digits: " . $outputDigits . PHP_EOL;

for ($i = 0; $i < strlen($input); $i++) {
    $char = $input[$i];


    if ($char >= 'A' && $char <= 'C') {
        $outputDigits .= '2';
    } else if ($char >= 'D' && $char <= 'F') {
        $outputDigits .= '3';
    } else if ($char >= 'G' && $char <= 'I') {
        $outputDigits .= '4';
    } else if ($char >= 'J' && $char <= 'L') {
        $outputDigits .= '5';
    } else if ($char >= 'M' && $char <= 'O') {
        $outputDigits .= '6';
    } else if ($char >= 'P' && $char <= 'S') {
        $outputDigits .= '7';
    } else if ($char >= 'T' && $char <= 'V') {
        $outputDigits .= '8';
    } else if ($char >= 'W' && $char <= 'Z') {
        $outputDigits .= '9';
    } else {
        $outputDigits .= '?';
    }
}

echo "Keypad digits: $outputDigits" . PHP_EOL;