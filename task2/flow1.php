<?php

$firstNumber = (float)readline("Input the 1st number: ");

$secondNumber = (float)readline("Input the 2nd number: ");

$thirdNumber = (float)readline("Input the 3rd number: ");

if ($firstNumber >= $secondNumber && $firstNumber >= $thirdNumber) {
    echo $firstNumber;
} else if ($secondNumber >= $firstNumber && $secondNumber >= $thirdNumber) {
    echo $secondNumber;
} else {
    echo $thirdNumber;
}

