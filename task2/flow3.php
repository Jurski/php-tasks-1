<?php

$input = readline("Enter a positive integer: ");

if (is_numeric($input) && (int)$input > 0 && $input == (int)$input) {
    echo "The number of digits: " . strlen((string)$input) . PHP_EOL;
} else {
    echo "Please enter a valid positive integer." . PHP_EOL;
}