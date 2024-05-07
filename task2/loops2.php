<?php

$inputNumber = (int)readline("Input the number: ");
$terms = (int)readline("Input number of terms: ");
$result = 1;

for ($i = 0; $i < $terms; $i++) {
    $result *= $inputNumber;
}

echo "Result is: $result";